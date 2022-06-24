<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    // use HasFactory;
    protected $table = 'db_city';
    protected $primaryKey = 'city_id';
    protected $fillable = ['city_id','country_id','city_name','city_image','p_view'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $timedtamp = false;
}
