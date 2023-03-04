<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\User;

class RegMemberController extends Controller
{
    public function show(string $id): Response
    {
        return response()->view('show', [
            'user' => User::findOrFail($id),
        ]);
    }

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
