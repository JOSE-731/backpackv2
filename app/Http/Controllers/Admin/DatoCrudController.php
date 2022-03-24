<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DatoRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class DatoCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DatoCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Dato::class);

        //Se puede cambiar el prefijo de la ruta y el nombre de la misma, en la ruta de /config/backpack/base.php
        CRUD::setRoute(config('backpack.base.route_prefix') . '/datos');
        CRUD::setEntityNameStrings('datos', 'datos');
    }

  
}
