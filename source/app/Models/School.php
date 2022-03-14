<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Training;
use App\Models\User;

class School extends Model
{
    use HasFactory;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id',
        'name',
        'description',
        'information',
        'video',
        'active'
    ];

    /**
     * Get the trainings for the school.
     */
    public function trainings()
    {
        return $this->hasMany(Training::class);
    }

    /**
     * Get the users for the school.
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
