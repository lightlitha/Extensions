<?php

namespace Faceless\Extensions\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ExtensionTypeExtension extends Pivot
{
    use HasFactory;

    protected $table = 'extension_extension_type';

    public $timestamps = false;
}
