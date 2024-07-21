<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $brands = [
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/jackpotbob-casino.png",
                "brand_name" => "Jackpot BOB",
                "rating" => 5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Casombie-Casino.png",
                "brand_name" => "Casombie",
                "rating" => 5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Winoui-Casino.png",
                "brand_name" => "Winoui Casino",
                "rating" => 5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Wild-Sultan-Casino.png",
                "brand_name" => "Wild Sultan",
                "rating" => 5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/vegasplus-casino.png",
                "brand_name" => "VegasPlus",
                "rating" => 5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/MaChance-Casino.png",
                "brand_name" => "MaChance",
                "rating" => 5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/ruby-vegas-casino.png",
                "brand_name" => "Ruby Vegas",
                "rating" => 4.5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Azur-Casino.png",
                "brand_name" => "Azur Casino",
                "rating" => 4.5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/betzino-casino.png",
                "brand_name" => "Betzino",
                "rating" => 4.5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Casinozer-Casino.png",
                "brand_name" => "Casinozer",
                "rating" => 4.5,
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/neon54-casino.png",
                "brand_name" => "Neon54 Casino",
                "rating" => 4.2,
            ],
        ];
        foreach ($brands as $brandData) {
            $brand = new Brand;
            $brand->fill($brandData);
            $brand->save();
        }
    }
}
