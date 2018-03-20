<?php

namespace App\Http\Controllers\SuperAdmin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modale\question_m;
use DB;

class QuestionEntry_c extends Controller
{
    //this is use to show Entry page
    public function QuestionEntry(){
    	
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

    	
    	// question topic
    	$rowTopic=DB::select('SELECT * FROM topic_table');
    	// var_dump($rowTopic);
    	$jsonMainTopic = [];
    	 	$i=0;

    	 	foreach ($rowTopic as $value) {
    	 		// var_dump($value);
    	 		$array = [];
    	 		$array["ID"] = $value->topicID;
    	 		$array["name"] = $value->name;
    	 		$jsonMainTopic[$i++] = $array;
    	 	}
    	
    	
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

    	 return view("superAdmin.superQuestionEntry",["type"=>$jsonMainType,"topic"=>$jsonMainTopic,"lang"=>$jsonMainLang,"course"=>$jsonMainCourse]);	
    }

    // Function to save question in to database 
    public function entryQuestion(){

    	$value = $_GET['value'];
    	// var_dump($question);

    	$jsonQuestion = [];

    	$jsonQuestion['Q'] = $value["question"];
    	$jsonQuestion['op1'] =$value["option1"];
    	$jsonQuestion['op2'] =$value["option2"];
    	$jsonQuestion['op3'] =$value["option3"];
    	$jsonQuestion['op4'] =$value["option4"];

    	$question_m = new question_m();

    	$question_m ->question_type_ID = $value["type"];
    	$question_m ->topicID = $value["topic"];
    	$question_m ->languageID = $value["lang"];
    	$question_m ->courseID = $value["course"];
    	$question_m ->question = json_encode($jsonQuestion);
    	$question_m ->ans = $value["answer"];
    	$question_m ->solution = $value["solution"];
    	// return "Good";

    	$question_m->save();
    	return "true";
    }
}
