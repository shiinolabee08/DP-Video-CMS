<?php

use Illuminate\Database\Seeder;

class CaseStudyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$categories = [ 'Testimonial Video', 'Event Filming', 'Explainer Videos', 'Facebook Cover Videos', 'Logo Animation', 'Motion Graphics', 'Promotional Video', 'Tutorial Video', 'Video Editing', 'Youtube Editing', 'Corporate Video' ];

    	foreach ($categories as $category) {

    		$slug = trim(str_replace(' ', '-', $category));
    		
	        DB::table('case_study_categories')->insert([
	            'title' => $category,
	            'slug' => strtolower($slug),
	            'description' => 'Test',
	            'created_at' => date('Y-m-d H:i:s')
	        ]);
    	}

    }
}
