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
        $names = ['Alga Green', 'Cloud Nine', 'Colombus Gold', 'Crema Bordeaux', 'Desert Rose', 'Golden Rustic', 'Golden Sun', 'Hawaiian Gold', 'Honey Onyx', 'Isaboor Brown', 'Jungle Green', 'Juparano Sunset', 'Lapidus', 'Madura Gold', 'Snake Brown', 'Sunset Cream', 'Twister', 'Typhoon Gold', 'Waterfall Green', 'Yellow River'];

        $inStock = ['Autumn Rose', 'Black Galaxy', 'Blue Pearl', 'Bordeaux', 'Colonial Gold' ,'Crema Marfil', 'Dark Emperador', 'Durango Travertine', 'Giallo Napolian', 'Giallo Veneziano', 'Golden Oak', 'Golden Queen', 'Kashmire Gold', 'Labrador Antique', 'Mascarello', 'New Santa Fe Brown', 'Santa Cecelia', 'Tropic Brown', 'Uba Tuba', 'Yellow Butterfly'];

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
                'deletePath' => '/public/materials/'.strtolower(str_replace(" ","_",$name)).'.jpg',
	    		'in_stock' => true,
	    		'created_at' => Carbon::now(),
	    		'updated_at' => Carbon::now()
	    	]);
        }

    }
}
