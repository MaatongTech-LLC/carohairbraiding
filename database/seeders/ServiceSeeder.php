<?php

namespace Database\Seeders;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Boho Knotless Small', 'type' => 'women'],
            ['name' => 'Braid Dreadlocs Or Retwist Kids', 'type' => 'kids'],
            ['name' => 'Conrow Braids (6-8)', 'type' => 'women'],
            ['name' => 'Crochet Braids', 'type' => 'women'],
            ['name' => 'Jumbo Knotless Braids', 'type' => 'women'],
            ['name' => "Kid's Conrows", "type" => "kids"],
            ['name' => "Knotless Boho Bob", 'type' => 'women'],
            ['name' => "Knotless With French Curls Hair", 'type' => 'women'],
            ['name' => "Limonade Braid", 'type' => 'women'],
            ['name' => "Man's Conrows", 'type' => 'men'],
            ['name' => "Man's Two Strand", 'type' => 'men'],
            ['name' => "Natural Hair Style With No Hair Added", 'type' => 'women'],
            ['name' => "Passion Twist Nubian", 'type' => 'women'],
            ['name' => "Retwist And Twi Strands Twist", 'type' => 'men'],
            ['name' => "Small Limonade Braid", 'type' => 'women'],
            ['name' => "Trivial Braids Half Box Braids", 'type' => 'women'],
        ];

        foreach ($services as $key => $service) {
            Service::create([
                'name' => $service['name'],
                'type' => $service['type'],
                'price' => 85,
                'tag' => 'auto',
                'description' => 'Haircut By Caro Hair Braiding',
                'image' => '/services-image/services/' . $key . '.jpg'
            ]);
        }
    }
}
