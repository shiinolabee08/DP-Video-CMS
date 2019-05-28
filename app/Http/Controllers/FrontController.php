<?php

namespace App\Http\Controllers;

use App\CaseStudy;
use App\CaseStudyCategory;
use Illuminate\Http\Request;

class FrontController
{
    public function index()
    {
        return view('welcome');
    }

    public function fetchData( $type = 1 )
    {
    	$returnData = false;

    	switch ($type) {
    		case 1: $returnData = CaseStudyCategory::all();
    			break;
    	}

    	return response()->json([ 'data' => $returnData ]);
    }

    /**
    * Fetch records via case study category
    * @param int $category
    *
    * @return \Illumninate\Http\Response
    **/
    public function fetchByCategory( $category )
    {
        $records = CaseStudy::where('case_study_category_id', $category)->get();

        return response()->json([ 'data' => ($records ? $records : []) ]); 
    }
}
