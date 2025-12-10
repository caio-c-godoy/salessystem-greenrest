<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartnerProductPrice extends Model
{
    use HasFactory;

    protected $fillable = [
        'partner_id',
        'product_variant_id',
        'custom_partner_price',
        'is_active',
    ];

    protected $casts = [
        'custom_partner_price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function productVariant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
