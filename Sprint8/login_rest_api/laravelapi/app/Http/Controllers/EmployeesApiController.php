<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeesApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::get();
        //    return $employee;
        return response()->json($employee);
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
        $employee = new Employee;
        $employee->namapegawai = $request->namapegawai;
        $employee->nip = $request->nip;
        $employee->golongan = $request->golongan;
        if ($employee->save()) {
            return response()->json($employee, 200, ["Error"]);
        } else {
            return response()->json($employee, 500, ["OK"]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return $employee;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->namapegawai = $request->namapegawai;
        $employee->nip = $request->nip;
        $employee->golongan = $request->golongan;



        if ($employee->update()) {
            return response()->json($employee, 200, ["ok!"]);
        } else {
            return response()->json($employee, 500, ["Error!"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $id)
    {
        $employee = Employee::findOrfail($id);
        if ($employee) $employee->delete();
        else
            return response()->json("error");
        return response()->json("berhasil");
    }
}
