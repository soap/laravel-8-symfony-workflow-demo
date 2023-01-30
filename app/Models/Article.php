<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ZeroDaHero\LaravelWorkflow\Traits\WorkflowTrait;

class Article extends Model
{
    use HasFactory, WorkflowTrait;

    protected $fillable = [
        'title', 'body', 'owner_id'
    ];
}
