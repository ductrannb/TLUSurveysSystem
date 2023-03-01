<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Answer extends Model
{
    use HasFactory;
    use SoftDelete;

    protected $guarded = [];

    public function question()
    {
        return $this->hasOne(Question::class);
    }
}
