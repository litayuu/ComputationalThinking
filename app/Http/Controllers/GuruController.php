<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
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
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
        ]);
        
        if($request->hasFile('gambar')) {
            $gambarName = time().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move('konsep', $gambarName);
        } else {
            $gambarName = '';
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
            $data->gambar = $gambarName;
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
    
    public function konsep_edit(string $id) {
        $edit = Konsep::findOrFail($id);
        return view('guru.konsep.konsep_edit', ['edit' => $edit]);
    }

    public function konsep_update(Request $request, $id) {
        $edit = Konsep::findOrFail($id);
        
        $gambar = $request->file('gambar');
        if ($gambar) {
            // Storage::delete('public/'.$post->cover);
            $gambarName = time().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move('konsep', $gambarName);
        } else {
            $gambarName = $edit->gambar;
        }
        $edit->update([
            'gambar'     => $gambarName,
            'materi'     => $request->materi,
            'soal'      => $request->soal,
            'a'     => $request->a,
            'b'      => $request->b,
            'c'     => $request->c,
            'd'      => $request->d,
            'kunci'      => $request->kunci,
        ]);
        return redirect('/guru/konsep')->with('alert-success', 'Data berhasil diubah dan disimpan');
    }
    
    public function konsep_delete($id) {
        $delete = Konsep::where('id', $id)->delete();
        return redirect('/guru/konsep')->with(['success' => 'Data Berhasil Dihapus!']);
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
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg,heic|max:2048',
        ]);

        if($request->hasFile('gambar')) {
            $gambarName = time().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move('materi', $gambarName);
        } else {
            $gambarName = '';
        } 

        try {
            $data = new Materi;
            $data->materi = $request->materi;
            $data->isi = $request->isi;
            $data->gambar = $gambarName;
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
    
    public function materi_edit(string $id) {
        $edit = Materi::findOrFail($id);
        return view('guru.materi.materi_edit', ['edit' => $edit]);
    }

    public function materi_update(Request $request, $id) {
        $edit = Materi::findOrFail($id);
        
        $gambar = $request->file('gambar');
        if ($gambar) {
            // Storage::delete('public/'.$post->cover);
            $gambarName = time().'.'.$request->gambar->getClientOriginalExtension();
            $request->gambar->move('materi', $gambarName);
        } else {
            $gambarName = $edit->gambar;
        }
        $edit->update([
            'gambar'     => $gambarName,
            'materi'     => $request->materi,
            'isi'      => $request->isi,
        ]);
        return redirect('/guru/materi')->with('alert-success', 'Data berhasil diubah dan disimpan');
    }
    
    public function materi_delete($id) {
        $delete = Materi::where('id', $id)->delete();
        return redirect('/guru/materi')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
