<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactosRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContactosCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContactosCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation { show as traitShow; }

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Contactos::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contactos');
        CRUD::setEntityNameStrings('contactos', 'contactos');

        $this->crud->allowAccess(['list', 'create', 'delete']);
  }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //Mostramos los campos que queremos que salgan en la tabla
      //  CRUD::column('id');



      CRUD::column('nombre');
     // CRUD::column('numero');
      CRUD::column('created_at');

      $this->crud->addColumn([
        'name'        => 'numero',
        'label'       => 'Title',
        'searchLogic' => function ($query, $column, $searchTerm) {
            $query->orWhere('numero', 'like', '%'.$searchTerm.'%');
        }
    ]);

     //$this->crud->orderBy('nombre');
     //$this->crud->addClause('where', 'nombre', '=', 'zz');
     //$this->crud->addClause('where', 'id', '>', '2');




        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ContactosRequest::class);

        //Mostramos los campos que, queremos que salgan en el formulario
        CRUD::field('nombre');
        CRUD::field('numero');
        //CRUD::field('created_at');
        //CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }


    public function show($id)
    {
        // custom logic before

      //  $content = Contactos::find($id);
        // cutom logic after
       // return $content;
    }

}
