<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Yajra\DataTables\DataTables;
use App\Models\Magazine;
use App\Models\Issued;
use App\Models\Aricalimagemode;

class Artical extends Model
{
    use HasFactory;
    protected $table='articles';
    protected $fillable=['issue_id','lng_id','title','description','audio'];


    public function issue()
{
    return $this->belongsTo(Issued::class);
}

public function images()
{
    return $this->hasMany(Aricalimagemode::class);
}

    public function magazine()
    {
        return $this->belongsTo(Magazine::class);
    }

    public function getAllarticals(){

       return  $articles = Artical::with('magazine')->get();


    }
    public function articlesData()
{
    $articles = Artical::with('magazine')->get();

    return DataTables::of($articles)
        ->addColumn('magazine_name', function ($article) {
            return $article->magazine->name;
        })
        ->addColumn('slno', function ($article) {
            return '';
        })
        ->addColumn('image', function ($article) {
            $imageUrl = asset('storage/' . $article->image);
            return '<img src="' . $imageUrl . '" width="100" height="100" />';
        })
        ->addColumn('audio', function ($article) {
            $audioUrl = asset('storage/' . $article->audio . '.mp3');
            return '<audio controls>
                        <source src="' . $audioUrl . '" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>';
        })

        ->addColumn('actions', function ($article) {
            return '<button class="edit-button" data-funname="articaledit" data-id="'.$article->id.'" onclick="editArtical('.$article->id.')"><span class="fa fa-edit text-success"></span></button>
            <button class="delete-button" onclick=delete_conform('.$article->id.',"articaldelete") data-funname="magazinesdelete" data-id="' . $article->id . '" data-toggle="modal" data-target="#deleteModal"><span class="fa fa-trash text-danger"></span></button>';
        })
         ->addColumn('bulk_upload', function ($article) {
            return '<a href="bulk-upload/'.$article->id.'">Bulk Upload</a>';
        })
        ->rawColumns(['image', 'actions', 'audio', 'bulk_upload'])
        ->make(true);
}


public function allcategories()
{
  return  Magazine::select('id','name')->get();


}


public function issued()
{
    return $this->belongsTo(Issued::class, 'issue_id', 'id');
}
}
