<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class ServiceController extends Controller
{
    /**
     * Display a listing of services.
     */
    public function index()
    {
        $services = Event::latest()->paginate(10);

        return view('admin.service.index', compact('services'));
    }

    /**
     * Show create form.
     */
    public function create()
    {
        return view('admin.service.create');
    }
    public function edit($id)
{

  $service = Event::findOrFail($id);

  return view('admin.service.edit', compact('service'));
}


    /**
     * Store new service.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'           => 'required|string|max:255',
            'subtitle'        => 'nullable|string|max:255',
            'guest_limit'     => 'nullable|integer|min:1',
            'duration'        => 'nullable|string|max:100',
            'price'           => 'nullable|numeric|min:0',
            'food_negotiable' => 'nullable|boolean',
            'description'     => 'nullable|string',
        ]);

        $validated['food_negotiable'] = $request->has('food_negotiable');

        Event::create($validated);

        return redirect()
            ->route('admin.service.index')
            ->with('success', 'Service created successfully.');
    }

    /**
     * Delete service.
     */
    public function destroy(string $id)
    {
        $service = Event::findOrFail($id);
        $service->delete();

        return redirect()
            ->route('admin.service.index')
            ->with('success', 'Service deleted successfully.');
    }
    public function update(Request $request, $id)
{
    $service = Event::findOrFail($id);

    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'nullable|string|max:255',
        'guest_limit' => 'nullable|integer',
        'duration' => 'nullable|string|max:255',
        'price' => 'nullable|numeric',
        'description' => 'nullable|string',
    ]);

    $validated['food_negotiable'] = $request->has('food_negotiable');

    $service->update($validated);

    return redirect()
        ->route('admin.service.index')
        ->with('success', 'Service updated successfully!');
}

}
