<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
    use HasFactory;

    protected $fillable =  ['employee_id', 'sutarties_nr', 'rekomendacija', 'greitis', 'aptarnavimas', 'pastabos',
        'sutikimas'];

    protected $casts = ['sutikimas'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model){

            $sale = Sales::latest('id')->firstOrFail();

            $model->sutarties_nr = 'NR-'.str_pad($sale->id + 1, 5, 0, STR_PAD_LEFT);
        });
    }

}

