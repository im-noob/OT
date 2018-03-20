<?php

Route::get("/superAdmin/full","SuperAdmin\\fullControler_c@show");

Route::post("/superAdmin/full/lang","SuperAdmin\\fullControler_c@language");

Route::get("/superAdmin/full/sub","SuperAdmin\\fullControler_c@subject");

Route::get("/superAdmin/full/sub","SuperAdmin\\fullControler_c@subject");

Route::get("/superAdmin/entry","SuperAdmin\\QuestionEntry_c@QuestionEntry");

Route::get("/superAdmin/entry/save","SuperAdmin\\QuestionEntry_c@entryQuestion");

Route::get("/superAdmin/pack/show","SuperAdmin\\createPackage_c@showPackage");

Route::get("/superAdmin/pack/save","SuperAdmin\\createPackage_c@savePackage");
 
?> 