<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function Category(){
        return $this->BelongsTo(Category::class);
    }

    public function User(){
        return $this->BelongsTo(User::class);
    }


}
