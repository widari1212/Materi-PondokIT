<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $student = Student::get();
    //    return $student;
    return response()->json($student);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $student = new Student;
       $student->nama = $request->nama;
        $student->nrp = $request->nrp;
        $student->email = $request->email;

        $student->jurusan = $request->jurusan;
        if ($student->save()){
            return response()->json($student,200,["Error"]);
        }else{
            return response()->json($student,500,["OK"]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::findOrFail($id);
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::findOrFail($id);
        $student->nama = $request->nama;
        $student->nrp = $request->nrp;
        $student->email = $request->email;
        $student->jurusan = $request->jurusan;


        if($student->update()){
            return response()->json($student,200, ["ok!"]);
        }else {
            return response()->json($student,500,["Error!"]);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrfail($id);
        if($student)$student->delete();
        else
        return response()->json("error");
        return response()->json("berhasil");


    }
}
