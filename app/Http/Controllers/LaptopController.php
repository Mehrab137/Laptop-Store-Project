<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Laptop;

class LaptopController extends Controller
{
    public function addLaptopView()
    {
        return view('add_laptop');
    }

    public function addLaptopSubmit(Request $request)
    {
        $laptop = new Laptop();
        $laptop->brand = $request->brand;
        $laptop->model = $request->model;
        $laptop->processor = $request->processor;
        $laptop->cores = $request->cores;
        $laptop->ram = $request->ram;
        $laptop->save();

        return redirect()->route('view.laptop.list');
    }

    public function viewLaptopList()
    { 
        $laptops = Laptop::select('id', 'brand', 'model', 'processor', 'cores', 'ram')->get();

        return view('view_laptop', ['laptops' => $laptops]);
    }

}


