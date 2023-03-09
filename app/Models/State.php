<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\State
 *
 * @property int $id
 * @property int $country_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|State query()
 * @mixin \Eloquent
 */
class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'country_id',
        'name',
    ];


    //-----------
    // Relations
    //-----------

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function employees()
    {
        return $this->hasMany(employees::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    
}
