<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class controllerVendedora extends Controller
{
    public function cadvendedora()
    {
        return view('vendedora');
    }
}

?>