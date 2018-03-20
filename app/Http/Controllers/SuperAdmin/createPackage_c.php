<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB; 

class createPackage_c extends Controller
{
    //Below function is use to 
    public function showPackage(){

    	// question lang
    	$rowQuesLang=DB::select('SELECT * FROM language_table');
    	// var_dump($rowQuesLang);
    	$jsonMainLang = [];
    	 	$i=0;

    	 	foreach ($rowQuesLang as $value) {
    	 		// var_dump($value);
    	 		$array = [];
    	 		$array["ID"] = $value->languageID;
    	 		$array["name"] = $value->name;
    	 		$jsonMainLang[$i++] = $array;
    	 	}


    // question course
    	$rowcourse=DB::select('SELECT * FROM course_table');
    	// var_dump($rowcourse);
    	$jsonMainCourse = [];
    	 	$i=0;

    	 	foreach ($rowcourse as $value) {
    	 		// var_dump($value);
    	 		$array = [];
    	 		$array["ID"] = $value->courseID;
    	 		$array["name"] = $value->name;
    	 		$jsonMainCourse[$i++] = $array;
    	 	}


    // question Type
    	$rowQuesType=DB::select('SELECT * FROM question_type_table');
    	// var_dump($rowQuesType);
    	$jsonMainType = [];
    	 	$i=0;

    	 	foreach ($rowQuesType as $value) {
    	 		// var_dump($value);
    	 		$array = [];
    	 		$array["ID"] = $value->question_type_ID;
    	 		$array["name"] = $value->name;
    	 		$jsonMainType[$i++] = $array;
    	 	}

    	 return view("superAdmin.superCreatePackage",["lang"=>$jsonMainLang,"course"=>$jsonMainCourse,"type"=>$jsonMainType]);	
    
    }

    // bellow function is use to save 
    public function savePackage(){

        foreach ($_GET as $key => $value) {
            echo "<br>".$key." => ".$value;
            # code...
        }
    }
}
