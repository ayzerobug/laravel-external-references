<?php

namespace Ayzerobug\LaravelExternalReferences\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ExternalReference extends Model
{
    public $guarded = [];

    public function referenceable(): MorphTo
    {
        return $this->morphTo();
    }
}
