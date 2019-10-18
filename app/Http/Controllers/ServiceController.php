<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();

        return view('service.index', compact('services'));
    }

    public function store()
    {
        $data = request()->validate([
        'name' => 'required|min: 5',
    ]);

        \App\Service::create($data);

//        return redirect('service');   //redirect back x2 options
        return redirect()->back();
    }
}
