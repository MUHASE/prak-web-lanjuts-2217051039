<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Muhammad Haris Setiawan',
            'kelas' => 'B',
            'npm' => '2217051039'
        ];

        return view('profile', $data);
        }
}