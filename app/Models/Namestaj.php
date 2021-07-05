<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tip;
class Namestaj extends Model
{
    use HasFactory;

    public function tip(){
        return $this->belongsTo(Tip::class);
    }
    protected $fillable = ['naziv','tip_id'];
}
