<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
   public function guardar(Request $request)
{
    User::create([
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect('/giro-empresa');
}
}