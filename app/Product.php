<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    public $timestamps=false;
    protected $fillable = [
        'category_id','product_name','image','status','created_date'
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $rules = [
        'product_name' => ['required'],
        'category_id' => ['required'],
        'image' => ['required'],
        'status' => ['required']
    ];

}
