<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageReviewModel extends Model
{
    // use HasFactory;
    protected $table = 'db_image_review';
    protected $primaryKey = 'id';
    protected $fillable = ['id','id_member','id_review','img_review'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
    public $timedtamp = false;
}
