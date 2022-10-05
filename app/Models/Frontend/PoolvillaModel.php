<?php

namespace App\Models\Frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoolvillaModel extends Model
{
    // use HasFactory;
    protected $table = 'db_old_poolvilla';
    protected $primaryKey = 'id';
    protected $fillable = ['id','name','room','web','star_rate','address','country','city','postal','twin_bed','full_bed','queen_bed','king_bed','bathroom','adult','kids','villa_size','more_about'];
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'update_at';
    public $timedtamp = false;
}
