<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    /**
     * guarded
     *
     * @var array
     */
    protected $guarded = [];

    public function subcategory(){
        return $this->belongsTo('App\Models\Subcategory','subcategory_id');
    }
    public function subsubcategory(){
        return $this->belongsTo('App\Models\Subsubcategory','subsubcategory_id');
    }
    
}
