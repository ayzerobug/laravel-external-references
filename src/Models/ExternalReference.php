<?php

namespace Ayzerobug\LaravelExternalReferences\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class ExternalReference extends Model
{
    public $guarded = [];

    /**
     * Create a new model instance.
     *
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);

        // Load hidden attributes from configuration
        $this->hidden = config('external-references.hidden_attributes', []);
    }

    public function referenceable(): MorphTo
    {
        return $this->morphTo();
    }
}
