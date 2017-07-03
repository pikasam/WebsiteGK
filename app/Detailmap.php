<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detailmap extends Model
{
    protected $fillable = [
        'name', 'detmap_img', 'downloaded', 'shared',
    ];
}
