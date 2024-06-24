<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with=['category','author'];

public function scopeSurya($query, array $filters)
{
    
    $query->when($filters['cari'] ?? false , function ($query , $search ){
       return $query->where('title','like','%'.$search.'%')
        ->orWhere('body', 'like','%'. $search .'%');               
    });
    $query->when($filters['category'] ?? false , function($query,$category){
        return $query->whereHas('category' , function($query)use ($category){
            $query->where('slug' , $category);
        });
    });
    $query->when($filters['author'] ?? false , function($query,$author){
        return $query->whereHas('author' , function($query)use ($author){
            $query->where('username' , $author);
        });
    });
}

public static function find($slug)
 {

    $posts = static::all();
   // $post=[];

    // foreach($posts as $p){
    //     if($p ["slug"] === $slug){
    //         $post = $p;
    //     }

    // }
    return $posts-> firstwhere('slug' ,$slug);

}

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function author()
    {
        return $this->belongsTo(User::class ,'user_id');

    }
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
