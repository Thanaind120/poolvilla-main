<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    // use HasFactory;
    protected $table = 'db_country';
    protected $primaryKey = 'country_id';
    protected $fillable = ['country_id','country_name','country_image','p_view'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $timedtamp = false;
}
