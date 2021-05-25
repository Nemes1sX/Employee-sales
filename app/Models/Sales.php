<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable =  ['employee_id', 'sutarties_nr', 'rekomendacija', 'greitis', 'aptarnavimas', 'pastabos',
        'sutikimas'];

}
