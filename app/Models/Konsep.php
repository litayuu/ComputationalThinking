<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsep extends Model
{
    use HasFactory;

    protected $table = 'konseps';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'materi', 'a', 'b', 'c', 'd', 'kunci', 'keterangan', 'gambar'];
    protected $dates = ['created_at, update_at'];

    public function answer(){
    	return $this->belongsTo('App\Models\Answer');
    }

}
