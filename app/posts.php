<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class posts extends Model
{
    //
    public $timestamps=false;
    protected $fillable = [
        'category_id','product_name','image','status','created_date'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
  
}
