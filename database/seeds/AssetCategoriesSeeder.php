<?php

use Illuminate\Database\Seeder;
use App\Models\AssetCategory;

class AssetCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //clear the exisiting records
        AssetCategory::truncate();

        //create sample assets
        AssetCategory::create([
            'name'=>"computer",
            'description'=>"this is a computer",
            'is_active'=>"1"
        ]);

         //create sample assets
         AssetCategory::create([
            'name'=>"laptop",
            'description'=>"this is a laptop",
            'is_active'=>"1"
        ]);

         //create sample assets
         AssetCategory::create([
            'name'=>"tablet",
            'description'=>"this is a tablet",
            'is_active'=>"1"
        ]);

         //create sample assets
         AssetCategory::create([
            'name'=>"mobile",
            'description'=>"this is a mobile",
            'is_active'=>"1"
        ]);

         //create sample assets
         AssetCategory::create([
            'name'=>"printer",
            'description'=>"this is a printer",
            'is_active'=>"1"
        ]);


    }
}
