<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
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
            'name' => 'image', // The db column name
            'label' => "image", // Table column heading
            'type' => 'image_custom',
            'height' => '50px',
            'closure' => function($entry) {
                return @$entry->images->first()->url;
            }
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
            'label' => "User",
            'type' => 'select2',
            'name' => 'user_id', // the db column for the foreign key
            'entity' => 'user', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => User::class, // foreign key model
            'allows_null' => false,
        ]);

        $this->crud->addField([  // Select2
            'label' => "Provide",
            'type' => 'select2',
            'name' => 'provide_id', // the db column for the foreign key
            'entity' => 'provide', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => 'App\Models\Provide', // foreign key model
            'allows_null' => false,
        ]);

        $this->crud->addField([  // Select2
            'label' => "City",
            'type' => 'select2',
            'name' => 'city_id', // the db column for the foreign key
            'entity' => 'city', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model' => 'App\Models\City', // foreign key model
            'allows_null' => false,
        ]);

        $this->crud->addField([
            'name' => 'images',
            'label' => 'Images',
            'type' => 'virals_browse_image',
        ]);
    }

    private function setupFilter()
    {

    }

    public function store(StoreRequest $request)
    {
        $redirect_location = parent::storeCrud($request);
        $this->crud->entry->createImage($request->images);
        return $redirect_location;
    }

    public function update(UpdateRequest $request)
    {
        $redirect_location = parent::updateCrud($request);
        $this->crud->entry->updateImage($request->images);
        return $redirect_location;
    }

}
