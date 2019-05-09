<?php

namespace App\Http\Controllers;

use App\Company;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CompanyController extends Controller
{
    protected $fields_to_validate = [
        'name'  => 'required|max:255',
        'email' => 'unique:companies',
        'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
    ];

    protected $fields_to_update = [ 'name', 'email', 'logo', 'website_url' ];

    protected $fields_to_validate_on_update = [ 'name'  => 'required|max:255', 'logo' => 'image|mimes:jpeg,png,jpg|max:2048' ];

    protected $model_class = 'App\Company';

    protected $model_class_names = [ 'company', 'companies' ];

    /**
     * Renders the form for creating a new company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view( $this->model_class_names[1] . '.create');
    }

    /**
    * Storing records of child class ie Employee/Company
    * @param Request $request
    *
    * @return obj | Model Resource
    **/
    public function store(Request $request)
    {
        $request->validate($this->fields_to_validate);

        $uploadedFile = $request->file('logo');
        $filename = time().$uploadedFile->getClientOriginalName();

        Storage::disk('public')->putFileAs(
            'logos/',
            $uploadedFile,
            $filename
        );

        $newRecord = new $this->model_class($request->all());
        $newRecord->logo = $filename;

        $newRecord->save();
        
        return redirect("/{$this->model_class_names[1]}/". $newRecord->id);
    }

    /**
     * Display the specified record resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('companies.show', compact('company', $company));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('companies.edit', compact('company', $company));
    }
}
