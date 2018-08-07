<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $names = ['Cloud Nine', 'Colombus Gold', 'Crema Bordeaux', 'Desert Rose', 'Golden Rustic', 'Golden Sun', 'Hawaiian Gold', 'Isaboor Brown', 'Juparano Sunset', 'Lapidus', 'Madura Gold', 'Snake Brown', 'Sunset Cream', 'Twister', 'Typhoon Gold', 'Yellow River'];

        $inStock = ['Autumn Rose', 'Black Galaxy', 'Blue Pearl', 'Bordeaux', 'Colonial Gold' ,'Crema Marfil', 'Durango Travertine', 'Giallo Napolian', 'Giallo Veneziano', 'Golden Oak', 'Golden Queen', 'Kashmire Gold', 'Mascarello', 'New Santa Fe Brown', 'Santa Cecelia', 'Tropic Brown', 'Yellow Butterfly'];

        $isGreen = ['Alga Green',  'Waterfall Green', 'Jungle Green'];
        $isGreenStock = ['Uba Tuba'];

        $isGranite = ['Honey Onyx', 'Labrador Antique', ];
        $isGraniteStock = ['Dark Emperador'];

    	foreach ($names as $name) {

	    	DB::table('stones')->insert([
                'name' => $name,
                'path' => '/pictures/materials/'.strtolower(str_replace(" ","_",$name)).'.jpg',
                'deletePath' => '/public/materials/'.strtolower(str_replace(" ","_",$name)).'.jpg',
	    		'in_stock' => false,
	    		'created_at' => Carbon::now(),
	    		'updated_at' => Carbon::now()
	    	]);
        }

        foreach($inStock as $stock) {

            DB::table('stones')->insert([
                'name' => $stock,
                'path' => '/pictures/materials/'.strtolower(str_replace(" ","_",$stock)).'.jpg',
                'deletePath' => '/public/materials/'.strtolower(str_replace(" ","_",$stock)).'.jpg',
	    		'in_stock' => true,
	    		'created_at' => Carbon::now(),
	    		'updated_at' => Carbon::now()
	    	]);
        }

        foreach($isGreen as $green) {

            DB::table('stones')->insert([
                'name' => $green,
                'path' => '/pictures/materials/'.strtolower(str_replace(" ","_",$green)).'.jpg',
                'deletePath' => '/public/materials/'.strtolower(str_replace(" ","_",$green)).'.jpg',
                'in_stock' => false,
                'color' => 'green',
	    		'created_at' => Carbon::now(),
	    		'updated_at' => Carbon::now()
	    	]);
        }

        foreach($isGreenStock as $greenStock) {

            DB::table('stones')->insert([
                'name' => $greenStock,
                'path' => '/pictures/materials/'.strtolower(str_replace(" ","_",$greenStock)).'.jpg',
                'deletePath' => '/public/materials/'.strtolower(str_replace(" ","_",$greenStock)).'.jpg',
                'in_stock' => true,
                'color' => 'green',
	    		'created_at' => Carbon::now(),
	    		'updated_at' => Carbon::now()
	    	]);
        }

        foreach($isGranite as $granite) {

            DB::table('stones')->insert([
                'name' => $granite,
                'path' => '/pictures/materials/'.strtolower(str_replace(" ","_",$granite)).'.jpg',
                'deletePath' => '/public/materials/'.strtolower(str_replace(" ","_",$granite)).'.jpg',
                'in_stock' => false,
                'type' => 'granite',
	    		'created_at' => Carbon::now(),
	    		'updated_at' => Carbon::now()
	    	]);
        }
        
        foreach($isGraniteStock as $graniteStock) {

            DB::table('stones')->insert([
                'name' => $graniteStock,
                'path' => '/pictures/materials/'.strtolower(str_replace(" ","_",$graniteStock)).'.jpg',
                'deletePath' => '/public/materials/'.strtolower(str_replace(" ","_",$graniteStock)).'.jpg',
                'in_stock' => true,
                'type' => 'granite',
	    		'created_at' => Carbon::now(),
	    		'updated_at' => Carbon::now()
	    	]);
        }
    
    }
}
