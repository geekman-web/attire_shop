<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageUpload extends Model
{
    protected $table = 'queries';

    protected $fillable = ['image', 'design', 'sku', 'status', 'session_id'];
}
