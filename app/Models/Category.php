<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['name', 'description', 'image'];

    public function services()
    {
        return $this->hasMany(Service::class);
    }
}
