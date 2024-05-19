<?php

namespace Ayzerobug\LaravelExternalReferences\Traits;

use Ayzerobug\LaravelExternalReferences\Models\ExternalReference;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait HasExternalReferences
{
    /**
     * Define a polymorphic one-to-many relationship.
     *
     * @return MorphMany
     */
    public function external_references()
    {
        return $this->morphMany(ExternalReference::class, 'referenceable');
    }

    /**
     * Set a new external reference.
     *
     * @param string $reference
     * @param string $provider
     * @param string|null $tag
     * @return $this
     */
    public function setExternalReference(string $reference, string $provider, ?string $tag = null): self
    {
        $this->external_references()->updateOrCreate(
            ['provider' => $provider,  'tag' => $tag],
            ['reference' => $reference]
        );

        return $this;
    }


    /**
     * Get the first reference for a given provider and tag.
     *
     * @param string $provider
     * @param string|null $tag
     * @return string|null
     */
    public function getExternalReference(string $provider, ?string $tag = null): ?string
    {
        return $this->external_references()
            ->where('provider', $provider)
            ->where('tag', $tag)->first()?->reference;
    }

    /**
     * Find the model by external reference.
     *
     * @param string $reference
     * @param string $provider
     * @param string|null $tag
     * @return static|null
     */
    public static function findByExternalReference(string $reference, string $provider, ?string $tag = null): ?static
    {
        $referenceableType = static::class;

        $externalReference = ExternalReference::where([
            'reference' => $reference,
            'referenceable_type' => $referenceableType,
            'provider' => $provider,
            'tag' => $tag,
        ])->first();

        return $externalReference?->referenceable;
    }
}
