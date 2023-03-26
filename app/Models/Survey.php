<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class Survey extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function user() {
        return $this->hasOne(User::class);
    }

    public function questions() {
        return $this->hasMany(Question::class);
    }

    public function results() {
        return $this->hasMany(Result::class);
    }

    public function reports() {
        return $this->hasMany(Report::class);
    }

    public function scores() {
        $scores = Result::select('score', DB::raw('count(*) as count'))
            ->where('survey_id', $this->id)
            ->groupBy('score')
            ->get();
        for ($i = 0; $i <= 10; $i++) {
            $hasScore = $scores->contains(function ($item) use ($i) {
                return $item['score'] == $i;
            });
            if (!$hasScore) {
                $scores->push(['score' => $i, 'count' => 0]);
            }
        }
        return json_encode($scores);
    }

}
