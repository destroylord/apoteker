<?php

namespace App\Http\Controllers;

use App\Models\Drug;
use Illuminate\Http\Request;

class DrugController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $drugs = Drug::all();
        return view('admin.drug.index', compact('drugs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Drug $drug)
    {
        return view('admin.drug.create', compact('drug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Drug::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Drug $drug)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $drug = Drug::find($id);
        return view('admin.drug.edit', compact('drug'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        Drug::find($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $drug = Drug::find($id);
        $drug->delete();
        return back();
    }
}
