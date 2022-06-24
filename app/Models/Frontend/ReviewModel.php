<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    // use HasFactory;
    protected $table = 'db_review';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_member','name_hotel','img_hotel','recommend_rate','write_review','status','save_date','save_time'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $timedtamp = false;
}
