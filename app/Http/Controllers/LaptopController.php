<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
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

    public function viewLaptopList(Request $request)
    { 
        // $laptops = Laptop::select('id', 'brand', 'model', 'processor', 'cores', 'ram')->get();

        // return view('view_laptop', ['laptops' => $laptops]);

       
        
        if ($request->ajax()) {
            $laptops = Laptop::select(['id', 'brand', 'model', 'processor', 'cores', 'ram'])->get();
            return Datatables::of($laptops)
            ->addColumn('action', function(){
                return '<button class="btn btn-danger">See</button>';
                })
            ->rawColumns(['action'])
            ->make(true);


        }
        return view('view_laptop');
                       
    }

    }