<?php

namespace App\Http\Controllers;
use App\Models\Provider;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){ //$product=Product::find(2);

       $provider=Provider::all();

       return view('proveedor.list', compact('providers'));

    }

    public function create (){

        return view('provider.create');

    }

    public function store(Request $request){

        $provider= new Provider();

        $provider->name=$request->name;
        $provider->ciudad=$request->description;
        $provider->email=$request->price;

        $provider->save();

        return $provider;


    }


}