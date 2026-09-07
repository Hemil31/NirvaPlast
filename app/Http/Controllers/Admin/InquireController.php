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
        $inquires = Inquire::whereNotNull('name')->whereNotNull('email')->get();
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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:20',
            'country_code' => 'nullable|string|max:10',
            'message' => 'nullable|string',
        ]);

        Inquire::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => ($validated['country_code'] ?? '') . " " . $validated['mobile'],
            'message' => $validated['message'] ?? null,
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
