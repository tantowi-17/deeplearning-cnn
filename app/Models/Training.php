<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Training extends Model
{
    use HasFactory, Notifiable;

    public $table = "training";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'epoch',
        'loss',
        'accuracy',
        'created_at',
        'updated_at',
    ];
}
