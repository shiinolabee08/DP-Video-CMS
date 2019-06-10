<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $fields_to_validate = [];

    protected $fields_to_validate_on_update = [];

    protected $fields_to_update = [];

    protected $model_class_names = []; // names of the model singular and plural

    protected $model_class;

    protected $is_redirect_to_index = false;

    public function __construct()
	{
	    $this->middleware('auth');
	}

    /**
     * Fetch list of records
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->model_class::paginate(10);

        return view( $this->model_class_names[1] . '.index', compact('data', $data));
    }

    /**
    * Storing records of child class ie Employee/Company
    * @param Request $request
    *
    * @return redirect to view record page
    **/
    public function store(Request $request)
    {
        $request->validate($this->fields_to_validate);

        $newRecord = $this->model_class::create($request->all());

        return $this->is_redirect_to_index == true ? redirect("/admin/{$this->model_class_names[1]}/") : redirect("/admin/{$this->model_class_names[1]}/". $newRecord->id);
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

    	$record = $this->model_class::findOrFail($id);
        $record->update($request->only($this->fields_to_update));

        $request->session()->flash('message', 'Data record successfully updated.');

        return redirect("/admin/{$this->model_class_names[1]}");
    }

    /**
    * Deleting records of child class
    * @param int | $id
    *
    * @return redirect to list page
    **/
    public function destroy($id, Request $request)
    {
        $record = $this->model_class::findOrFail($id);
        $record->delete();

        $request->session()->flash('message', 'Data record successfully deleted.');

        return redirect("/admin/{$this->model_class_names[1]}");
    }
}
