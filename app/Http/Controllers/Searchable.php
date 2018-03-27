<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class Searchable extends Controller
{
    public function searchResult($searchKey){
        $result = User::search($searchKey)->get();;
        $resultArr = [];
        $i = 0 ;
        foreach($result as $key)
        	$resultArr[$i++] = $key->name;
        return response()->json(['list'=>$resultArr],201);	
    }
}
