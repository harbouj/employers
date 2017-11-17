<?php

namespace App\Http\Controllers;

use App\Employer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emp = Employer::orderBy('id','desc')->take(5)->get();
        $e = $emp->shuffle();
        return view('employer.index', compact('e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        Employer::create(['name'=> request('name'),'fonction'=>request('fonction')]);
        return redirect('/');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employer = Employer::find($id);
        return view('employer.edit', compact('employer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $r)
    {
        $employer = Employer::find(request('id'));

        $employer->name = request('name');
        $employer->fonction = request('fonction');
        $employer->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\r  $r
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employer = Employer::find($id);

        $employer->delete();
        return redirect('/');        
    }
}
