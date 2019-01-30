<?php

namespace App\Http\Controllers;

use App\Insert_model_db;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Insert_db extends Controller
{
    public function start_show()
    {
        $student=DB::table("student_table")->get();

        return view("welcome",[
            "qwe"=>$student
        ]);
    }

    public function add_value(Request $request)
    {
        $a1=$request->input("a1");
        $student=new Insert_model_db();

        $student->name=$request->input("a1");

        $student->save();

        return back()->withInput();
    }

    public function delete_value(Request $request)
    {
        $a1=$request->input("a2");

        DB::table("student_table")
            ->where("name","=",$a1)
            ->delete();

        return back()->withInput();
    }

    public function select_v(Request $request)
    {
        $a3=$request->input("a3");

        $student=DB::table("student_table")
            ->where("name","=",$a3)
            ->get();
//
        return view("welcome",[
            "e"=>$student
        ]);
    }
}
