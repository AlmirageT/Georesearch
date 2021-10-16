<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poi;

class CommonController extends Controller
{
    public function get_data()
    {
        $puntos = Poi::all();
        return $puntos;
    }
    public function get_filter_data($nombre)
    {
        $puntosFiltrados = Poi::where('category_name',$nombre)->get();
        return $puntosFiltrados;
    }
}
