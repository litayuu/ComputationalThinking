<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $table = 'answers';
    protected $primaryKey = 'id';
    protected $fillable = ['id', 'id_soal', 'jawaban', 'score'];
    protected $dates = ['created_at, update_at'];

    public function konsep(){
    	return $this->hasMany('App\Models\Konsep');
    }
}
