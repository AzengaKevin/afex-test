<?php

namespace App\Http\Controllers;

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
            'services' => [
                'Transportation',
                'Tracking & Tracing',
                'Delivery',
                'Communication'
            ]
        ]);
    }
}
