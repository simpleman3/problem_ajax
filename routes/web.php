<?php

Route::get("/","Insert_db@start_show");

//Route::get("/s","Insert_db@select_v");

Route::post("/add","Insert_db@add_value");

Route::post("/del","Insert_db@delete_value");