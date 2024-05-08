<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasUuids;
    use HasFactory;
    protected $fillable = ['id', 'authorId','parentId', 'tag', 'title','metaTitle','slug','sumary','published','content'];

}
