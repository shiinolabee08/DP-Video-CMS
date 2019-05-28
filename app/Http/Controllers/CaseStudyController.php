<?php

namespace App\Http\Controllers;

use App\CaseStudy;
use App\CaseStudyCategory;

use Illuminate\Http\Request;

class CaseStudyController extends Controller
{
    protected $model_class = 'App\CaseStudy';
    
    protected $model_class_names = [ 'case-study', 'case-studies' ];

    protected $fields_to_update = [ 'title', 'feature_image', 'youtube_video_url', 'published' ];

    protected $fields_to_validate_on_update = [ 'title'  => 'required|max:100' ];

    /**
     * Renders the form for creating a new case_study.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $case_study_categories = CaseStudyCategory::all();

        return view( $this->model_class_names[1] . '.create', [ 'categories' => $case_study_categories  ]);
    }
    
    /**
     * Display the specified record resource.
     *
     * @param  \App\CaseStudy  $case_study
     * @return \Illuminate\Http\Response
     */
    public function show(CaseStudy $case_study)
    {
        return view('case-studies.show', [ 'case_study' => $case_study ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseStudy  $case_study
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseStudy $case_study)
    {
        return view('case-studies.edit', [ 'case_study' => $case_study ]);
    }    

}
