<?php

namespace App\Http\Controllers;
use Illuminate\Http\Response;
use App\Models\User;

class RegMemberController extends Controller
{

    public function friends(): Response 
    {
        return response()->view('reg-member.friends', [
            'users' => User::where('year', auth()->user()->year)->paginate(4),
        ]);
    }
    
    public function dashboard(): Response
    {
        $users = User::orderBy('year', 'desc')->paginate(12);
        return response()->view('/dashboard', [
            'users' => $users,
        ]);
    }
}
