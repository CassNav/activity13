<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $fillable = [
        'title','content','active'
    ];

    static function all_notes(){
        return Note::where('active',true)->get();
    }

    static function note_by_id($id){
        return Note::where('id',$id)
            ->where('active',true)
            ->firstOrFail();
    }
}
