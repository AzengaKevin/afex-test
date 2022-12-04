<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'Transportation',
            'Tracking & Tracing',
            'Delivery',
            'Communication'
        ];

        collect($data)->each(fn($name) => Service::create(compact('name')));
    }
}
