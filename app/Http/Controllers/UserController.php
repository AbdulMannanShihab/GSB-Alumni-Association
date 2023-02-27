<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

class UserController extends Controller
{
    public function index(): Response
    {
        return response()->view('users.index', [
            'users' => User::orderBy('year', 'desc')->paginate(4),
        ]);
    }
 
}
