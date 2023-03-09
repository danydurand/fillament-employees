<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\City
 *
 * @property int $id
 * @property int $state_id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @mixin \Eloquent
 */
class City extends Model
{
    use HasFactory;

    protected $fillable = [
        'state_id',
        'name',
    ];


    //-----------
    // Relations
    //-----------

    public function employees()
    {
        return $this->hasMany(employees::class);
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
