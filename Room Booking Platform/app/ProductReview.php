<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductReview extends Model
{
    //

      protected $table='product_reviews';
    public $primaryKey='id';
    public $timestamps=true;
    protected $fillable=['headline','description','rating','rid'];
}
