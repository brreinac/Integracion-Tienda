<?php

namespace Modules\Tienda\Entities;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    # url en donde se almacenaran los archivos cargados
    protected  $table = 'products';
    public $timestamps = false;

    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_id',
        'product_name',
        'brand_id',
        'category_id',
        'model_year',
        'list_price'
    ];

}
