<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return $users;
    }

    public function store(Request $request)
    {
        $user = new User();
        $user->user_name = $request->user_name;
        $user->user_mail = $request->user_mail;
        $user->user_pass = $request->user_pass;
        $user->user_type = $request->user_type;

        $user->save();
    }

    public function show(string $id)
    {
        $user = User::find($id);
        return $user;
    }

    
    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $user->user_name = $request->user_name;
        $user->user_mail = $request->user_mail;
        $user->user_pass = $request->user_pass;
        $user->user_type = $request->user_type;

        $user->save();
        return $user;
    }

    public function destroy(string $id)
    {
        $user = User::destroy($id);
        return $user;
    }
}
