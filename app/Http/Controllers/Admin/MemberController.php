<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class MemberController extends Controller
{
    public function create()
    {
        return view('admin.members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(Str::random(12))  // velak caur e pastu nosutit
        ]);
        
        $user->assignRole('member');
        
        // pievieno admin pirmo grupu
        $adminGroup = auth()->user()->adminGroups()->first();
        if ($adminGroup) {
            $adminGroup->members()->attach($user->id);
        }

        return redirect()->route('admin.dashboard')->with('success', 'Member created!');
    }
}
