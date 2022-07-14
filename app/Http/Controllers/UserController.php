<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\post;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::with('profile')->findOrFail($id);
        return $user;
    }

    public function show1($id)
    {
        $user = User::with('post')->findOrFail($id);
        return $user;
    }

    public function show2($id)
    {
        $user = post::with('category')->findOrFail($id);
        return $user;
    }

   
}
