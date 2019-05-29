<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $table = 'case_studies';
    protected $fillable = [ 'title', 'feature_image', 'youtube_video_url', 'case_study_category_id', 'published' ];

    public function category()
    {
    	return $this->belongsTo('App\CaseStudyCategory', 'case_study_category_id');
    }
}
