<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::all();
        return view('admin.TeamMember.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.TeamMember.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = str_replace(' ', '_', $request->name) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $validated['image'] = $file->storeAs('uploads/Team', $filename, 'public');
        }

        TeamMember::create($validated);
        return redirect()->route('admin-team-page')->with('success', 'Team member created successfully.');
    }

    public function edit(string $id)
    {
        $teamMember = TeamMember::findOrFail($id);
        return view('admin.TeamMember.edit', compact('teamMember'));
    }

    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'required|integer|in:0,1',
        ]);

        $teamMember = TeamMember::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($teamMember->image && !str_starts_with($teamMember->image, 'front/')) {
                Storage::disk('public')->delete($teamMember->image);
            }
            $file = $request->file('image');
            $filename = str_replace(' ', '_', $request->name) . '_' . time() . '.' . $file->getClientOriginalExtension();
            $validated['image'] = $file->storeAs('uploads/Team', $filename, 'public');
        }

        $teamMember->update($validated);
        return redirect()->route('admin-team-page')->with('success', 'Team member updated successfully.');
    }

    public function destroy(string $id)
    {
        $teamMember = TeamMember::findOrFail($id);

        if ($teamMember->image && !str_starts_with($teamMember->image, 'front/')) {
            Storage::disk('public')->delete($teamMember->image);
        }

        $teamMember->delete();
        return redirect()->route('admin-team-page')->with('success', 'Team member deleted successfully.');
    }
}
