<?php

namespace App\Http\Controllers\Admin;

use App\Models\Address;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\StoreAddressRequest as StoreRequest;
use App\Http\Requests\UpdateAddressRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use Illuminate\Http\Request;

/**
 * Class AddressCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class AddressCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Address');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/address');
        $this->crud->setEntityNameStrings('address', 'addresses');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */
        $this->setupColumns();
        $this->setupFields();
        $this->setupFilter();

        // add asterisk for fields that are required in AddressRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    private function setupColumns()
    {
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Address',
            'type' => 'text'
        ]);

        $this->crud->addColumn([
            'name' => 'city',
            'label' => 'City',
            'type' => 'closure',
            'function' => function ($entry) {
                return getCity($entry->city)['name'];
            }
        ]);

        $this->crud->addColumn([
            'name' => 'provide',
            'label' => 'Provide',
            'type' => 'closure',
            'function' => function ($entry) {
                return getProvide($entry->provide)['name'];
            }
        ]);
    }

    private function setupFields()
    {
        $this->crud->addField([
            'type' => 'text',
            'name' => 'name',
            'lable' => 'Address'
        ]);

        $this->crud->addField([ // select_from_array
            'name' => 'provide',
            'label' => "Provide",
            'type' => 'select2_from_array',
            'options' => getAllProvides(),
            'allows_null' => false,
            'default' => 0,
        ]);

        $this->crud->addField([
            'label' => 'City',
            'type' => 'select2_from_ajax_custom',
            'name' => 'city',
            'attribute' => 'name',
            'data_source' => route('crud.address.get-city'),
            'placeholder' => 'Select an city',
            'dependencies' => ['provide'],
            'method' => 'POST',
            'minimum_input_length' => 0,
            'options' => function($oldValue) {
                return getCity($oldValue);
            },
            'connected_key' => 'id'
        ]);
    }

    private function setupFilter()
    {

    }

    public function store(StoreRequest $request)
    {

        // your additional operations before save here
        $redirect_location = parent::storeCrud($request);
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        // your additional operations before save here

        $redirect_location = parent::updateCrud($request);
        return $redirect_location;
    }

    public function getCity(Request $request)
    {
        $form = collect($request->input('form'))->pluck('value', 'name');
        $cities = getAllCitiesOfProvide($form->get('provide'));
        $collection = collect($cities)->mapWithKeys(function($item) {
            return [$item['id'] => $item];
        });
        return collect(["data" => $collection]);
    }
}
