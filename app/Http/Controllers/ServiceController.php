<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function Fusion()
    {
            $services = Service::where('type',1)->get();
            return view('service.index', compact('services'));
        
    }

    public function Relaxation()
    {
        $services = Service::where('type',2)->get();
        return view('service.index2', compact('services'));

    }

    public function Therapeutic()
    {
        $services = Service::where('type',3)->get();
        return view('service.index3', compact('services'));

    }



    public function show($id)
    {
            $service = Service::find($id);
            return view('detail.index', compact('service'));

    }
}
