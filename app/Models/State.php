<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class State extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name'];

    public function cars(): HasManyThrough
    {
        // states.id -> cities.state_id -> cars.city_id
        return $this->hasManyThrough(Car::class, City::class);
    }

    public function cities(): HasMany
    {
        return $this->hasMany(City::class);
    }

}
