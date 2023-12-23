<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;
    protected $fillable = ['trip_name','price', 'status', 'location_id', 'remaining_tickets', ];
    
/*     Create a Laravel model relationship between the 'User' model and the 'Post' model. The relationship should be defined as follows:
    - A user can have multiple posts.
    - A post belongs to a user.
    Use the appropriate Laravel syntax to define this relationship.
    template: */
    class User extends Model {
      public function posts() {
        return $this->hasMany(Post::class);
      }
    }
    
    
    class Post extends Model {
      public function user() {
        return $this->belongsTo(User::class);
      }
    }
}
