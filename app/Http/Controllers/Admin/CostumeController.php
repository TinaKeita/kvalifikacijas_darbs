<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Costume;
use App\Models\CostumeItem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CostumeController extends Controller
{
    public function index()
    {
        $group = auth()->user()->adminGroups()->first();
        $costumes = $group ? $group->costumes : collect();

        return view('admin.costumes.index', compact('costumes'));
    }

    public function create()
    {
        return view('admin.costumes.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image|max:2048', // max 2MB
        ]);

        // store the image
        $imagePath = $request->file('image')->store('costumes', 'public');

        $costume = Costume::create([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'image' => $imagePath,
            'admin_group_id' => auth()->user()->adminGroups()->first()->id,
        ]);

        return redirect()->route('admin.costumes.index')->with('success', 'Costume created successfully!');
    }

    public function show(Costume $costume)
    {
        $items = $costume->items()->with('user')->get();

        return view('admin.costumes.show', compact('costume', 'items'));
    }

    public function destroy(Costume $costume)
    {
        $costume->delete();

        return back()->with('success', 'Costume deleted.');
    }
}
