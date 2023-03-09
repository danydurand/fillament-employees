<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property int $department_id
 * @property int $city_id
 * @property int $state_id
 * @property int $country_id
 * @property string|null $zipcode
 * @property string|null $birth_date
 * @property string|null $date_hired
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Employee query()
 * @mixin \Eloquent
 */
class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'address',
        'department_id',
        'city_id',
        'state_id',
        'country_id',
        'zipcode',
        'birth_date',
        'date_hired',
    ];

    //----------------
    // Relationships
    //----------------

    public function department()
    {
        return $this->belongsTo(Department::class);
    }
    
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    
    


}
