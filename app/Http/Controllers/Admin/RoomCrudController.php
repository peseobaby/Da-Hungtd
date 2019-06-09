<?php

namespace App\Http\Controllers\Admin;

use App\Models\Convenience;
use App\Models\RoomHasConvenience;
use App\Repositories\RoomHasConvenience\RoomHasConvenienceRepository;
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
    private $roomHasConvenienceRepo;

    public function __construct(RoomHasConvenienceRepository $roomHasConvenienceRepo)
    {
        parent::__construct();
        $this->roomHasConvenienceRepo = $roomHasConvenienceRepo;
    }

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
            'name' => 'type_id',
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

        $this->crud->addField([
            'label'     => 'Conveniences',
            'type'      => 'checklist_custom',
            'name'      => 'convenience_id',
            'options'   => Convenience::all()->pluck('name', 'id')->toArray(),
            'value' => function($entry) {
                return @$entry ? explode(':', @$entry->convenience->content) : [];
            }
        ]);

        $this->crud->addField([
            'name' => 'images',
            'label' => 'Images',
            'type' => 'virals_browse_image',
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
            'name' => 'convenience',
            'label' => 'Convenience',
            'type' => 'closure',
            'function' => function($entry) {
                return $entry->getAllConvenience()->implode('name', ', ');
            }
        ]);

        $this->crud->addColumn([
            'name' => 'image', // The db column name
            'label' => "image", // Table column heading
            'type' => 'image_custom',
            'height' => '50px',
            'closure' => function($entry) {
                return @$entry->images->first()->url;
            }
        ]);
    }

    public function store(StoreRequest $request)
    {
        $convenience = $this->roomHasConvenienceRepo->create(['content' => implode(':', $request->convenience_id)]);
        $request->merge(['convenience_id' => $convenience->id]);
        $redirect_location = parent::storeCrud($request);
        $this->crud->entry->createImage($request->images);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $convenience = $request->convenience_id;
        $request->offsetUnset('convenience_id');
        $convenience = $this->roomHasConvenienceRepo->updateOrCreateModel(['content' => implode(':', $convenience)]);
        $request->merge(['convenience_id' => $convenience->id]);
        $redirect_location = parent::updateCrud($request);
        $this->crud->entry->updateImage($request->images);
        return $redirect_location;
    }


}
