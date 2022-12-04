<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Inertia\Inertia;

class ServiceController extends Controller
{
    /**
     * Shows the page listing our services
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render("Services/Index", [
            'services' => Service::all(['id', 'name'])
        ]);
    }
}
