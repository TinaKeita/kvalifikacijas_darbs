<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\CostumeItem;

class CostumeController extends Controller
{
    // Show all items available for this member
    public function index()
    {
        $items = auth()->user()
            ->assignedCostumeItems() // make sure this relationship exists in User model
            ->with('costume')
            ->get();

        return view('member.index', compact('items'));
    }

    // Show only items assigned to this member
    public function assigned()
    {
        $items = CostumeItem::where('assigned_to', auth()->id())
            ->with('costume')
            ->get();

        return view('member.assigned', compact('items'));
    }

    // Unassign an item
    public function unassign(CostumeItem $item)
    {
        if ($item->assigned_to !== auth()->id()) {
            abort(403);
        }

        $item->update([
            'assigned_to' => null,
            'assigned_at' => null,
        ]);

        return back()->with('success', 'Costume unassigned.');
    }
}

