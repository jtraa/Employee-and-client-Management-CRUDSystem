<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::Orderby('name', 'asc')->paginate(5);
        return view('employees.index')->with('employees', $employees);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'surname' => 'required'
        ]);

        //Create Post
        $employees = new Employee;
        $employees->name = $request->input('name');
        $employees->surname = $request->input('surname');
        $employees->email = $request->input('email');
        $employees->telephone = $request->input('telephone');
        $employees->save();

        return redirect('/employees')->with('success', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employees.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employees.edit')->with('employees', $employees);
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
         $this->validate($request, [
        'name' => 'required',
        'surname' => 'required'
    ]);

    //Update Post
    $employees = Employee::find($id);
    $employees->name = $request->input('name');
    $employees->surname = $request->input('surname');
    $employees->email = $request->input('email');
    $employees->telephone = $request->input('telephone');
    $employees->save();

    return redirect('/employees')->with('success', 'Post Updated');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        return redirect('/employees')->with('success', 'Post Removed');
    }
}
