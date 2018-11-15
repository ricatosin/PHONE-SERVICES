<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Phone;

class PhonesController extends Controller
{
    //Create a Controller to handle HTTP ACTIONS 


    public function index(){
        return Phone::all();
    }

    public function show(Phone $phone){
        return $phone;
    }

    public function store(Request $request){
        $phone = Phone::create($request->all());
        return response()->json($product,201);
    }
    public function update(Request $request, Phone $phone){
        $phone->update($request->all());
        return response()->json($phone,200);
    }
    public function delete(Phone $phone){
        $product->delete();
        return response()->json(NULL,204);
    }

}
