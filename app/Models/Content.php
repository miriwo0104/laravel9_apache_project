<?php

namespace App\Models;

use Database\Factories\Content\ContentFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'id',
        'content',
    ];

    public static function newFactory()
    {
        return ContentFactory::new();
    }
}
