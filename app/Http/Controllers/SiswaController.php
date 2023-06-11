<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Konsep;
use App\Models\Materi;
use App\Models\Answer;

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
            'score' => 'required',
        ]);

        // $id = Answer::findOrFail($id->id);

        // $id = Answer::create([
        //     'id_soal'     => $request->id_soal,
        //     'jawaban'     => $request->jawaban,
        //     'score'       => $request->score
        // ]);

        // if($id){
        //     Session()->flash('alert-success', 'Jawaban anda benar');
        //     return redirect('/siswa/true');
        // }else{
        //     Session()->flash('alert-danger', 'Jawaban anda salah');
        //     return redirect('/siswa/false')->withInput();
        // }

        try {
            $data = new Answer;
            $data->id_soal = $request->id_soal;
            $data->jawaban = $request->jawaban;
            $data->score = $request->score;
            $data->save();
            // dd($data);

            Session()->flash('alert-success', 'Jawaban anda benar');
            return redirect('/siswa/true');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('/siswa/false')->withInput();
        }
    }

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
