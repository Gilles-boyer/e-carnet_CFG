<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExaminQuestionMoniteur extends Model
{
    use HasFactory;

       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'examin_id',
        'question_id',
        'acquis',
        'en_cours',
        'non_acquis',
        'non_evalue',
        'appreciation'
    ];
}
