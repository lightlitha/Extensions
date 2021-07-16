<?php

namespace Faceless\Extensions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extension extends Model
{
    use HasFactory;

    /**
     * Get the type of extension.
     */
    public function extension_type()
    {
        return $this->belongsToMany(ExtensionType::class)->using(ExtensionTypeExtension::class);
    }

    /**
     * Get the booth used for the cart
     */
    public function subscription_type()
    {
        return $this->belongsTo(SubscriptionType::class);
    }

    /**
     * Get the tenant using extension.
     */
    public function tenant()
    {
        return $this->belongsToMany(\Faceless\Tenant\Models\Tenant::class)->using(ExtensionTenant::class)->withPivot(['is_active']);
    }
}
