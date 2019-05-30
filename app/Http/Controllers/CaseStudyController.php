<?php

namespace App\Http\Controllers;

use App\CaseStudy;
use App\CaseStudyCategory;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CaseStudyController extends Controller
{
    protected $model_class = 'App\CaseStudy';
    
    protected $model_class_names = [ 'case-study', 'case-studies' ];

    protected $fields_to_update = [ 'title', 'feature_image', 'youtube_video_url', 'case_study_category_id', 'published' ];

    protected $fields_to_validate_on_update = [ 'title'  => 'required|max:100' ];

    protected $fields_to_validate = [
        'title'  => 'required|max:255',
        'feature_image' => 'image|mimes:jpeg,png,jpg|max:2048',
    ];

    /**
     * Fetch list of records
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model_class::with('category')->paginate(10);

        return view( $this->model_class_names[1] . '.index', compact('data', $data));
    }

    /**
     * Renders the form for creating a new case_study.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $case_study_categories = CaseStudyCategory::with('caseStudies')->get();

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
    * Storing records of child class
    * @param Request $request
    *
    * @return obj | Model Resource
    **/
    public function store(Request $request)
    {
        $request->validate($this->fields_to_validate);

        $uploadedFile = $request->hasFile('feature_image') ? $request->file('feature_image') : false;

        if ( $uploadedFile ) {
            $filename = time().$uploadedFile->getClientOriginalName();

            Storage::disk('admin_uploads')->putFileAs(
                'case-studies/',
                $uploadedFile,
                $filename
            );
        }

        $newRecord = new $this->model_class($request->all());
        $newRecord->feature_image = $uploadedFile ? $filename : '';

        $newRecord->save();
        
        return redirect("/admin/{$this->model_class_names[1]}/". $newRecord->id);
    }

    /**
    * Updating records of child class ie Employee/Company
    * @param int | $id
    * @param Request $request
    *
    * @return redirect to list page
    **/
    public function update($id, Request $request)
    {   

        $request->validate($this->fields_to_validate_on_update);

        $uploadedFile = $request->hasFile('new_feature_image') ? $request->file('new_feature_image') : $request->file('feature_image');

        if ( $uploadedFile ) {
            $filename = time().$uploadedFile->getClientOriginalName();

            Storage::disk('admin_uploads')->putFileAs(
                'case-studies/',
                $uploadedFile,
                $filename
            );
        }

        $record = $this->model_class::findOrFail($id);
        $record->feature_image = $uploadedFile ? $filename : '';
        $record->update($request->only($this->fields_to_update));

        $request->session()->flash('message', 'Data record successfully updated.');

        return redirect("/admin/{$this->model_class_names[1]}");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CaseStudy  $case_study
     * @return \Illuminate\Http\Response
     */
    public function edit(CaseStudy $case_study)
    {
        $case_study_categories = CaseStudyCategory::all();

        return view('case-studies.edit', [ 'case_study' => $case_study, 'categories' => $case_study_categories ]);
    }    

}
