<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; 
use App\Modale\language_m;
use App\Modale\subject_m;
use Validator;
use DB;
use Redirect;

class fullControler_c extends Controller
{
    //Bellow function is use to add language
    public function language(Request $request){
    	
    	$language = $request->input("language");

    

    	 	$language_m = new language_m();

    	 	$language_m->name = $language;

    	 	$language_m->save();


    	 	 echo "sucess";

    }

    //Bellow function is use to add subject
    public function subject(Request $request){
    	
    	$subject = $request->input("subject");

    

    	 	$subject_m = new subject_m();

    	 	$subject_m->name = $subject;

    	 	$subject_m->save();


    	 	 echo "sucess";

    }

    //Bellow function is use to show fullControleer subject
    public function show(){

    	 	$subject_m = new subject_m();

    	 	$row = DB::select("Select * from subject_table");
    	 	$jsonMain = [];
    	 	$i=0;

    	 	foreach ($row as $value) {
    	 		// var_dump($value);
    	 		$array = [];
    	 		$array["ID"] = $value->subjectID;
    	 		$array["name"] = $value->name;
    	 		$jsonMain[$i++] = $array;
    	 	}

    	 	return view("superAdmin.fullControler",["sub"=>$jsonMain]);
    }

    //Bellow function is use to save topic
    public function topic(Request $request){

    		$topic = $request->input("topic");
    		
    	 	$topic_m = new topic_m();
    	 	
    }
}
