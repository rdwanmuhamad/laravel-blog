<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user', 'category'];
   
    public function scopeFilter($query, array $filters){
        // search menggunakan method when
        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                     ->orWhere('content', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });

        $query->when($filters['user'] ?? false, function($query, $user){
            return $query->whereHas('user', function($query) use ($user){
                $query->where('username', $user);
            });
        });
        
        // search menggunakan isset
        // if(isset($filters['search']) ? $filters['search'] : false ){
        //     return $query->where('title', 'like', '%' . $filters['search'] . '%')
        //                  ->orWhere('content', 'like', '%' . $filters['search'] . '%');
        // }
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
