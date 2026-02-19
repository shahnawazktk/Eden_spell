<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'client_name',
        'summary',
        'status',
        'priority',
        'progress',
        'budget',
        'spent_budget',
        'due_date',
        'is_template',
    ];

    protected $casts = [
        'budget' => 'decimal:2',
        'spent_budget' => 'decimal:2',
        'due_date' => 'date',
        'is_template' => 'boolean',
    ];
}
