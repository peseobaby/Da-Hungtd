<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;

// VALIDATION: change the requests to match your own file names if you need form validation
use App\Http\Requests\RoomRequest as StoreRequest;
use App\Http\Requests\RoomRequest as UpdateRequest;
use Backpack\CRUD\CrudPanel;
use App\Models\Room;
/**
 * Class RoomCrudController
 * @package App\Http\Controllers\Admin
 * @property-read CrudPanel $crud
 */
class RoomCrudController extends CrudController
{
    public function setup()
    {
        /*
        |--------------------------------------------------------------------------
        | CrudPanel Basic Information
        |--------------------------------------------------------------------------
        */
        $this->crud->setModel('App\Models\Room');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/room');
        $this->crud->setEntityNameStrings('room', 'rooms');

        /*
        |--------------------------------------------------------------------------
        | CrudPanel Configuration
        |--------------------------------------------------------------------------
        */

        // TODO: remove setFromDb() and manually define Fields and Columns

        $this->addField();
        $this->addColumn();

        // add asterisk for fields that are required in RoomRequest
        $this->crud->setRequiredFields(StoreRequest::class, 'create');
        $this->crud->setRequiredFields(UpdateRequest::class, 'edit');
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

    public function addField()
    {
        $this->crud->addField([
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'label' => 'Type',
            'type' => 'select',
            'name' => 'type',
            'entity' => 'type',
            'attribute' => 'name',
            'model'=> 'App\Models\RoomType'
            ]);
        $this->crud->addField([
            'name' => 'capacity',
            'label' => 'Capacity',
            'type' => 'number',
        ]);
        $this->crud->addField([
            'name' => 'num_bed_room',
            'label' => 'Bed Rooms',
            'type' => 'number',
        ]);
        $this->crud->addField([
            'name' => 'area',
            'label' => 'Area',
            'type' => 'number',
        ]);
        $this->crud->addField([
            'name' => 'price',
            'label' => 'Price',
            'type' => 'number',
        ]);
    }

    public function addColumn()
    {
        $this->crud->addColumn([
            'name' => 'name',
            'label' => 'Name',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'type.name',
            'label' => 'Type',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'capacity',
            'label' => 'Capacity',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'num_bed_room',
            'label' => 'Bed Rooms',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'area',
            'label' => 'Area',
            'type' => 'text',
        ]);
        $this->crud->addColumn([
            'name' => 'price',
            'label' => 'Price',
            'type' => 'number',
        ]);
        $this->crud->addColumn([
            'name' => 'active',
            'label' => 'Active',
            'type' => 'boolean',
            'options' => [0 => 'Not Free', 1 => 'Free']
        ]);
        $this->crud->addColumn([
            'name' => 'aconvenience_id',
            'label' => 'Aconvenience',
            'type' => 'text',
        ]);
    }
}
