<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Inquire;
use Illuminate\Http\Request;

class InquireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $inquires = Inquire::where('name', '!=', 'null')->where('email', '!=', 'null')->get();
        return view('admin.inquires', compact('inquires'));
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
    public function store(Request $request)
    {

        // dd($request->all());


        Inquire::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
            'service_type' => $request->service_type ?? null,
            'message' => $request->message,
        ]);

        return response()->json(['success' => true, 'message' => 'Inquiry submitted successfully!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
