<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Banner;

class BannersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerRecords = [
            ['id' => 1, 'name' => 'Défilé Christian Dior Haute Couture Printemps-été 2021', 
                'description' => 'Christian Dior vouait une passion aux arts divinatoires et aux signes du destin. Son autobiographie est ponctuée de rencontres souvent décisives avec des personnalités visionnaires : Ce sera extraordinaire. Cette Maison révolutionnera la mode ! écrit-il, tel un présage.',
                'image' => 'slider_bg1.jpg', 'type' => 'Slider', 'link' => ''],        
            ['id' => 2, 'name' => 'Atelier Pronovias 2021', 
                'description' => 'With dozens of new luxury bridal styles from designer Alessandra Rinaudo, you\'ll surely be asking yourself if these designs are indeed dresses or jewels. The truth is, they\'re a blend of both! Pronovias has employed a number of unique craftsmanship techniques to create the dynamic silhouettes you\'ll soon fawn over with us in the lookbook below.',
                'image' => 'slider_bg2.jpg', 'type' => 'Slider', 'link' => ''], 
            ['id' => 3, 'name' => 'Elie Saab - Fall 2021 Couture', 
                'description' => 'Elie Saab didn\'t travel to Paris this season, but he delivered a beautiful bouquet of a couture collection as an offering of hope and sign of his commitment to the métier. “We try to be very positive for the coming days,” said the designer on a call.',
                'image' => 'slider_bg3.jpg', 'type' => 'Slider', 'link' => ''], 
            ['id' => 4, 'name' => 'Women\'s Winter Collection', 
                'description' => '',
                'image' => 'slider_bg4.jpg', 'type' => 'Fix', 'link' => ''], 
            ['id' => 5, 'name' => 'Women\'s Winter Collection', 
                'description' => 'Saving up to 50% off all items.',
                'image' => '', 'type' => 'Advertise', 'link' => ''], 
        ];
        Banner::insert($bannerRecords);
    }
}
