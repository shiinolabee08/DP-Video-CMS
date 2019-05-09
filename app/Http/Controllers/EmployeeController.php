<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Company;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $fields_to_validate = [
        'first_name'=> 'required|max:255',
        'last_name' => 'required|max:255',
        'email'     => 'unique:employees'
    ];

    protected $fields_to_validate_on_update = [ 'first_name'  => 'required|max:255', 'last_name'  => 'required|max:255' ];

    protected $fields_to_update = ['first_name', 'last_name', 'email', 'phone', 'company_id'];

    protected $model_class = 'App\Employee';

    protected $model_class_names = [ 'employee', 'employees' ];

    /**
     * Renders the form for creating a new company.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();

        return view( $this->model_class_names[1] . '.create', compact('companies', $companies));
    }
    
    /**
     * Display the specified record resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee', $employee));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        $companies = Company::all();
        
        return view('employees.edit', [ 'employee' => $employee, 'companies' => $companies]);
    }


}
