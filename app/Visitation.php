<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Visitation extends Model
{
    use SoftDeletes;

    public $table = 'visitations';

    protected $hidden = [
    ];

    protected $dates = [
        'tanggal',
        'updated_at',
        'created_at',
        'deleted_at',
    ];

    protected $fillable = [
        'visitor_id','user_id',
        'card_id','tanggal',
        'keperluan','jaminan',
        'jaminan_lainnya','status'
    ];

    public function card(){
      return $this->hasOne('App\Card','id','card_id');
    }

    public function visitor(){
      return $this->hasOne('App\Visitor','id','visitor_id');
    }

    public function logs(){
      return $this->hasMany('App\Visitation_log','id',null);
    }

    public function areas(){
      return $this->hasMany('App\Visitation_area','id',null);
    }

}
