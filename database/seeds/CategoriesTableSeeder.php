<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    protected $categories = [
    	[
			'name' => 'Baybayin',
			'cover_photo_path' => 'cover-images/baybayin.jpeg',
    	],
    	[
			'name' => 'Calligraphy',
			'cover_photo_path' => 'cover-images/calligraphy.jpeg',
    	],
        [
			'name' => 'Watercolor Art',
			'cover_photo_path' => 'cover-images/watercolor-art.jpeg',
        ],
    ];

    public function run()
    {
    	foreach ($this->categories as $key => $category) {
    		$vars = [
				'name' => $category['name'],
				'cover_photo_path' => $category['cover_photo_path'],
    		];

    		\DB::beginTransaction();
    			Category::create($vars);
    		\DB::commit();
    	}    
    }
}
