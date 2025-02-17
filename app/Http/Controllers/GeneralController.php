<?php

namespace App\Http\Controllers;

use App\Models\general;
use App\Http\Requests\StoregeneralRequest;
use App\Http\Requests\UpdategeneralRequest;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gen=general::first();

        return view('general',['general'=>$gen]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoregeneralRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(general $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $general=general::first();  
       
        return view('general.edit', [
            'general' => $general,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdategeneralRequest $request, general $general)
    {
       // dd($request);
        //update employee
        $file = $request->file('image');
            $destinationPath = 'upload';
            $file->move($destinationPath,$file->getClientOriginalName());
        $gen= general::first();
        $gen->name=$request->name;
        $gen->image=$file->getClientOriginalName();
        
$gen->save();


return redirect('/general');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(general $general)
    {
        //
    }
}
