<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // public function index()
    // {
    //     return view('user');
    // }

    public function index(User $user, Request $request)
    {
        $items = $request->items ?? 50;
        $data = $user->with(['kelas'])->filter(request(['search']))->paginate($items);
        return view('user', [
            'users' => $data,
            'judul' => 'User',
            'items' => $items
        ]);
    }
}
