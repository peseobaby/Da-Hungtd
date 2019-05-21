<?php

namespace App\Http\Controllers\Admin;

use App\Models\Address;
use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\StoreHotelRequest as StoreRequest;
use App\Http\Requests\UpdateHotelRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Repositories\Hotel\HotelRepository;

/**
 * Class HotelCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class HotelCrudController extends CrudController
{
    private $hotel;
    public function __construct(HotelRepository $hotel)
    {
        parent::__construct();
        $this->hotel = $hotel;
    }
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Hotel');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/hotel');
        $this->crud->setEntityNameStrings('hotel', 'hotels');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        $this->setupColumns();
        $this->setupFields();
        $this->setupFilter();

        // add asterisk for fields that are required in HotelRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
    }

    private function setupColumns()
    {
        $this->crud->addColumn([
            'type' => 'text',
            'name' => 'name',
            'label' => 'Name'
        ]);

        $this->crud->addColumn([
            'name' => 'address',
            'label' => 'Address',
            'type' => 'closure',
            'function' => function($entry) {
                return $entry->address->getFullAddress();
            }
        ]);

        $this->crud->addColumn([
           'name' => 'rating',
           'label' => 'Rating',
           'type' => 'text'
        ]);

    }

    private function setupFields()
    {
        $this->crud->addField([
            'type' => 'text',
            'name' => 'name',
            'label' => 'Name'
        ]);

        $this->crud->addField([  // Select2
            'label' => "Address",
            'type' => 'select2',
            'name' => 'address_id', // the db column for the foreign key
            'entity' => 'address', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => Address::class, // foreign key model
            'allows_null' => false,
        ]);

        $this->crud->addField([
            'name' => 'rating',
            'label' => 'Rating',
            'type' => 'number',
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
        // your additional operations after save here
        // use $this->data['entry'] or $this->crud->entry
        return $redirect_location;
    }

}
