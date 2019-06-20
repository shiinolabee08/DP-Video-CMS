<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $table = 'case_studies';
    protected $fillable = [ 'title', 'post_slug', 'feature_image', 'youtube_video_url', 'published' ];

    public function categories()
    {
    	return $this->belongsToMany('App\CaseStudyCategory')->withTimestamps();
    }

    public function categoriesToString()
    {
    	$categories = $this->categories->toArray();
    	$category_list = [];

    	foreach ($categories as $category) {
    		array_push($category_list, $category['title']);
    	}

    	return implode(',', $category_list);
    }

}
