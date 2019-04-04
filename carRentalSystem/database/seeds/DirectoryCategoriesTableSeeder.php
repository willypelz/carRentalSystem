<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DirectoryCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('directory_categories')->delete();
        
        \DB::table('directory_categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'parent_id' => 0,
                'order' => 1,
                'name' => 'General',
                'slug' => '',
                'hash' => NULL,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            )
        ));
        
        
    }
}