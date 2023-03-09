<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Country query()
 * @mixin \Eloquent
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
    ];

    //-----------
    // Relations
    //-----------

    public function states()
    {
        return $this->hasMany(State::class);
    }

    public function employees()
    {
        return $this->hasMany(employees::class);
    }

    public function cities()
    {
        return $this->hasManyThrough(City::class, State::class);
    }
    
        
    
}
