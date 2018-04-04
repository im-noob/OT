<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use DB;
class HomeController extends Controller
{
    /* this function wiil set all the pakcaged */
    function settingPackage(){
        $all_data = DB::table('package_table')
            ->join('course_table', 'package_table.courseID', '=', 'course_table.courseID')
            ->select('Course_name','package_name','description')
            ->get();
        
        $course_data = DB::table('course_table')
            ->select('Course_name')
            ->get();
        
        return view('Home/HomeWelcome',['all_data'=>$all_data,'course_data'=>$course_data]);
    }
}
