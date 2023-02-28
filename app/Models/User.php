<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory;
    use SoftDeletes;
    use Notifiable;

    protected $guarded = [];

    public function surveys()
    {
        return $this->hasMany(Survey::class);
    }

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
