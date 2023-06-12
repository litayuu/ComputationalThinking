<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsep;

class TrueController extends Controller
{
    public function true($id) {
        $post= Konsep::firstOrFail($id);
        return view('siswa.true', ['post' => $post]);
    }
}
