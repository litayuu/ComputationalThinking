<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Konsep;
use App\Models\Materi;
use App\Models\Answer;

class GuruController extends Controller
{
    public function index() {
        return view('guru.index');
    }
    
    public function konsep_guru () {
        $konsep = Konsep::all();
        return view('guru.konsep.konsep', ['konsep' => $konsep]); 
    }

    public function konsep_create () {
        return view('guru.konsep.konsep_add');
    }

    public function konsep_save (Request $request) {
        $this->validate($request, [
            'materi' => 'required',
            'soal' => 'required',
            'a'=>'required',
            'b'=>'required',
            'c'=>'required',
            'd'=>'required',
            'kunci'=>'required',
            'keterangan'=>'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/uploads/konsep');
        } else {
            $path = '';
        }

        try {
            $data = new Konsep;
            $data->materi = $request->materi;
            $data->soal = $request->soal;
            $data->a = $request->a;
            $data->b = $request->b;
            $data->c = $request->c;
            $data->d = $request->d;
            $data->kunci = $request->kunci;
            $data->keterangan = $request->keterangan;
            $data->gambar = $path;
            $data->save();
            // dd($data);

            Session()->flash('alert-success', 'Data berhasil disimpan');
            return redirect('/guru/konsep/konsep_add');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('/guru/konsep/konsep_add')->withInput();
        }
    }

    public function konsep_show_guru($id) {
        $post = Konsep::where('id', $id)->firstOrFail();
        // dd($post);
        return view('guru.konsep.konsep_post', ['post' => $post]);
    }

// -----------------------------------------------------------------------
// Materi

    public function materi_guru () {
        $materi = Materi::all();
        return view('guru.materi.materi', ['materi' => $materi]); 
    }

    public function materi_create () {
        return view('guru.materi.materi_add');
    }

    public function materi_save (Request $request) {
        $this->validate($request, [
            'materi' => 'required',
            'isi' => 'required',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $path = $request->file('gambar')->store('public/uploads/materi');
        } else {
            $path = '';
        }

        try {
            $data = new Materi;
            $data->materi = $request->materi;
            $data->isi = $request->isi;
            $data->gambar = $path;
            $data->save();
            // dd($data);

            Session()->flash('alert-success', 'Data berhasil disimpan');
            return redirect('/guru/materi/materi_add');
        } catch (\Exception $e) {
            Session()->flash('alert-danger', $e->getMessage());
            return redirect('/guru/materi/materi_add')->withInput();
        }
    }

    public function materi_show_guru($id) {
        $post = Materi::where('id', $id)->firstOrFail();
        // dd($post);
        return view('guru.materi.materi_post', ['post' => $post]);
    }
}
