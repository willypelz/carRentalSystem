<?php

use Illuminate\Database\Seeder;
use Grimzy\LaravelMysqlSpatial\Types\Point;
use Carbon\Carbon;
class DirectoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('directories')->delete();

        \DB::table('directories')->insert(array (
            0 =>
    array (
        'id' => 1,
        'user_id' => 2,
        'directory_category_id' => 1,
        'name' => 'My First Listing',
		'slug' => 'my_first_listing',
        'blurb' => NULL,
        'photo' => NULL,
        'photos' => '{"1":"https://marketplace-kit.s3.amazonaws.com/default_listing.jpg"}',
    'description' => '<p>Welcome to Afiaanyi. This is your first listing. Edit or delete it, then start add listings!</p><p><br></p><p class="ql-align-justify">"The buyer is entitled to a bargain. The seller is entitled to a profit. So there is a fine margin in between where the price is right. I have found this to be true to this day whether dealing in paper hats, winter underwear or hotels."</p><p class="ql-align-justify">-  <span>Conrad Hilton</span></p>',
    'phone' => '08027678789',
                'staff_pick' => NULL,
                'views_count' => NULL,
                'email' => 'email@email.com',
        'location' => \DB::raw("ST_GeomFromText('POINT(-0.10213410 51.509865)')"),
        'lat' => '51.61100420',
        'lng' => '-0.10213410',
        'meta' => '[]',
		'city' => 'Lagos',
		'country' => 'NG',
		'tags' => NULL,
		'tags_string' => NULL,
		'is_admin_verified' => Carbon::now()->format('Y-m-d H:i:s'),
		'is_disabled' => NULL,
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
		'deleted_at' => NULL,
    ),
));


    }
}
