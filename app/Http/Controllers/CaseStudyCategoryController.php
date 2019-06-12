<?php

namespace App\Http\Controllers;

use App\CaseStudyCategory;

use Illuminate\Http\Request;

class CaseStudyCategoryController extends Controller
{
    protected $model_class = 'App\CaseStudyCategory';
    
    protected $model_class_names = [ 'case-study-category', 'case-study-categories' ];

    protected $fields_to_update = [ 'title', 'slug', 'description' ];

    /**
     * Manage categories
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CaseStudyCategory::with('caseStudies')->paginate(10);

        return view('case-study-categories.index', compact('data', $data) );
    }

    /**
     * Renders the form for creating a new category.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( $this->model_class_names[1] . '.create');
    }

    /**
     * Display the specified record resource.
     *
     * @param  \App\CaseStudyCategory  $case_study
     * @return \Illuminate\Http\Response
     */
    public function show(CaseStudyCategory $case_study_category)
    {
        return view('case-study-categories.show', [ 'case_study_category' => $case_study_category ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseStudyCategory  $case_study
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseStudyCategory $case_study_category)
    {   
        
        return view('case-study-categories.edit', [ 'case_study_category' => $case_study_category ]);
    }  
}
