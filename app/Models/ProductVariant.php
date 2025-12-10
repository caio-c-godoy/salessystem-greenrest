<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'size_label',
        'retail_price',
        'default_partner_price',
        'is_active',
    ];

    protected $casts = [
        'retail_price' => 'decimal:2',
        'default_partner_price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function partnerPrices()
    {
        return $this->hasMany(PartnerProductPrice::class);
    }

    public function priceForPartner(?Partner $partner): float
    {
        if (!$partner) {
            return (float) $this->default_partner_price;
        }

        $custom = $this->partnerPrices()
            ->where('partner_id', $partner->id)
            ->where('is_active', true)
            ->value('custom_partner_price');

        return (float) ($custom ?: $this->default_partner_price);
    }
}
