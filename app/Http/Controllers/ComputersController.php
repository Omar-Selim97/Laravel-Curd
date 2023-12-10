<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Computer;

class ComputersController extends Controller
{

    //Our Data

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("computers.index",[
           'computers'=>Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('computers.create');
        }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Validation
        $request->validate([
            'computer-name'=> 'required',
            'computer-origin'=>'required',
            'computer-price'=>['required' , 'integer']
        ]);
        $computer = new Computer();
        $computer->name = strip_tags($request->input('computer-name'));
        $computer->origin = strip_tags($request->input('computer-origin'));
        $computer->price = strip_tags ($request->input('computer-price'));
        $computer->save();
        return redirect()->route("computers.index") ;
    }

    /**
     * Display the specified resource.
     */
    public function show( $computer)
    {
        //


        return view('computers.show',[
            'computer'=>Computer::findOrFail($computer)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($computer)
    {
        //
        return view('computers.edit',[
            'computer'=>Computer::findOrFail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$computer)
    {
        //
        $request->validate([
            'computer-name'=> 'required',
            'computer-origin'=>'required',
            'computer-price'=>['required' , 'integer']
        ]);
       $to_Update= Computer::findOrFail($computer);
       $to_Update->name = strip_tags($request->input('computer-name'));
         $to_Update->origin = strip_tags($request->input('computer-origin'));
         $to_Update->price = strip_tags ($request->input('computer-price'));
         $to_Update->save();
        return redirect()->route("computers.show",$computer) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($computer)
    {
        //
        $to_Delete= Computer::findOrFail($computer);
        $to_Delete->delete();
        return redirect()->route("computers.index") ;

    }
}
