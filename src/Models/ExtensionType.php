<?php

namespace Faceless\Extensions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtensionType extends Model
{
    use HasFactory;

    public $timestamps = false;
    /**
     * Get the type of extension.
     */
    public function extensions()
    {
        return $this->belongsToMany(Extension::class)->using(ExtensionTypeExtension::class);
    }
}
