<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Issued extends Model
{
    use HasFactory;

   protected  $table='issued';
   protected $fillable=['magazine_id','name','year','month','lng_id','image','des'];

    public function magazine()
    {
        return $this->belongsTo(Categories::class, 'magazine_id');
    }
    public function articles()
    {
        return $this->hasMany(Artical::class, 'issue_id', 'id');
    }
    public function category()
    {
        return $this->belongsTo(Categories::class, 'magazine_id');
    }
}
