<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LmsSeries extends Model
{
    protected $table = 'lmsseries';
public function lmsCategoryId() 

{
 return $this->belongsTo('App\LmsCategory', 'category_id');
}

}