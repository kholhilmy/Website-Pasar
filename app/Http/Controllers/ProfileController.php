<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Node\Expr\BinaryOp\Identical;

class ProfileController extends Controller
{

    public function view($id)
    {
       $users = User::where('id', $id)->first();
       return view('profile.view-user', [
        "title" => "View Profile",
        "active" => 'profile',
        "user" => $users
    ]);
    }
    public function edit(User $user)
    {

        $user = User::where('id', $user->id)->first();
        return view('profile.edit-user', [
            "title" => "Edit User",
            "active" => 'profile',
            "user" => $user,
        ]);
    }

    public function update(Request $request)
    {
        request()->validate([
            'name' => 'required|max:255|min:2',
        ]);

        $request->update([
            'name' => request('name'),
        ]);

        return redirect('/profile')->with('status', 'Profile berhasil diupdate!');
    }

}
