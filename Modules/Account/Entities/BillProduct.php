<?php

namespace Modules\Account\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BillProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_type',
        'product_id',
        'bill_id',
        'quantity',
        'tax',
        'discount',
        'total',
    ];

    protected static function newFactory()
    {
            return \Modules\Account\Database\factories\BillProductFactory::new();
    }
    public function product()
    {
        if(module_is_active('ProductService'))
        {
         return $this->hasOne(\Modules\ProductService\Entities\ProductService::class, 'id', 'product_id')->first();
        }

    }
}
