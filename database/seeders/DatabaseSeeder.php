<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Country;
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
                "id" => 1
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Casombie-Casino.png",
                "brand_name" => "Casombie",
                "rating" => 5,
                "id" => 2
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Winoui-Casino.png",
                "brand_name" => "Winoui Casino",
                "rating" => 5,
                "id" => 3
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Wild-Sultan-Casino.png",
                "brand_name" => "Wild Sultan",
                "rating" => 5,
                "id" => 4
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/vegasplus-casino.png",
                "brand_name" => "VegasPlus",
                "rating" => 5,
                "id" => 5
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/MaChance-Casino.png",
                "brand_name" => "MaChance",
                "rating" => 5,
                "id" => 6
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/ruby-vegas-casino.png",
                "brand_name" => "Ruby Vegas",
                "rating" => 4.5,
                "id" => 7
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Azur-Casino.png",
                "brand_name" => "Azur Casino",
                "rating" => 4.5,
                "id" => 8
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/betzino-casino.png",
                "brand_name" => "Betzino",
                "rating" => 4.5,
                "id" => 9
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/Casinozer-Casino.png",
                "brand_name" => "Casinozer",
                "rating" => 4.5,
                "id" => 10
            ],
            [
                "brand_image" => "https://www.casinoonlinefrancais.info/cdn-cgi/image/format=auto,width=75,height=75,quality=80/img/logo300/neon54-casino.png",
                "brand_name" => "Neon54 Casino",
                "rating" => 4.2,
                "id" => 11
            ],
        ];
        foreach ($brands as $brandData) {
            $brand = new Brand;
            $brand->fill($brandData);
            $brand->save();
        }

        $countries = [
            ["code" => 'BE', "name" => 'Belgique'],
            ["code" => 'FR', "name" => 'France'],
            ["code" => 'CI', "name" => 'Côte d\'ivoire'],
            ["code" => 'SN', "name" => 'Senegal'],
            ["code" => 'TN', "name" => 'Tunisie'],
        ];
        foreach ($countries as $data) {
            $country = new Country;
            $country->fill($data);
            $country->save();
            $country->brands()->sync([1, 2, 3, 4, 5, 6, 7]);
        }
    }
}
