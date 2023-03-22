<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Report extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function results()
    {
        return $this->hasOne(Result::class);
    }

    public function survey()
    {
        return $this->hasOne(Survey::class);
    }
}
