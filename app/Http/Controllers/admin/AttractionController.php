<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Attraction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttractionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attractions = Attraction::latest()->paginate(10);

        return view('admin.attractions.index', compact('attractions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.attractions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')
                ->store('attractions', 'public');
        }

        Attraction::create($validated);

        return redirect()
            ->route('admin.attractions.index')
            ->with('success', 'Attraction created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $attraction = Attraction::findOrFail($id);

        return view('admin.attractions.edit', compact('attraction'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $attraction = Attraction::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($attraction->image) {
                Storage::disk('public')->delete($attraction->image);
            }

            $validated['image'] = $request->file('image')
                ->store('attractions', 'public');
        }

        $attraction->update($validated);

        return redirect()
            ->route('admin.attractions.index')
            ->with('success', 'Attraction updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $attraction = Attraction::findOrFail($id);

        if ($attraction->image) {
            Storage::disk('public')->delete($attraction->image);
        }

        $attraction->delete();

        return redirect()
            ->route('admin.attractions.index')
            ->with('success', 'Attraction deleted successfully!');
    }
}
