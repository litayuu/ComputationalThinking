<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Konsep;
use App\Models\Materi;
use App\Models\Answer;
use Intervention\Image\Gd\Commands\InsertCommand;

class SiswaController extends Controller
{
    public function index() {
        return view('siswa.index');
    }

    public function konsep_siswa () {
        $konsep = Konsep::all();
        return view('siswa.konsep', ['konsep' => $konsep]); 
    }

    public function konsep_show_siswa($id) {
        $post = Konsep::where('id', $id)->firstOrFail();
        // dd($post);
        return view('siswa.konsep_post', ['post' => $post]);
    }

    public function answer_save (Request $request, $id) {
        $this->validate($request, [
            'jawaban' => 'required',
            // 'score' => 'required',
        ]);

        $cek = Konsep::where('id', $id)->first();
        $score = '';
        if ($cek != null) {
            $jawaban = $cek[strtolower($request->jawaban)];
            if ($jawaban == $cek->kunci) {
                $score = 'benar';
            }else{
                $score = 'salah';  
            }

        }

        $insert = Answer::create([
            'id_soal' => $id,
            'jawaban' => $request->jawaban,
            'score' => $score,
        ]);

        if ($insert->score == 'benar') {
            Session()->flash('alert-success', 'Jawaban anda benar');
            return redirect('/siswa/true');
        }else{
            Session()->flash('alert-danger', "Jawaban anda salah!");
            return redirect('/siswa/false')->withInput();
        }
    }

    // public function true($id) {
    //     $post = Konsep::where('id', $id)->firstOrFail();
    //     // dd($post);
    //     return view('siswa.true', ['post' => $post]);
    // }

    // public function true() {
    //     return view('siswa.false');
    // }

    // public function false() {
    //     return view('siswa.false');
    // }

    public function materi_siswa () {
        $materi = Materi::all();
        return view('siswa.list_materi', ['materi' => $materi]); 
    }

    public function materi_show_siswa($id) {
        $post = Materi::where('id', $id)->firstOrFail();
        // dd($post);
        return view('siswa.materi_post', ['post' => $post]);
    }
}