<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

//     public static function alj()
// {
//     return collect ( self::$blog_post );
// }

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

}
