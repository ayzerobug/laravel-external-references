<?php

namespace Ayzerobug\LaravelExternalReferences\Traits;

use Ayzerobug\LaravelExternalReferences\Models\ExternalReference;

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
     * Set a new external reference
     *
     * @param string $reference
     * @param string $provider
     * @param string|null $tag
     * @return void
     */
    public function setExternalReference(string $reference, string $provider, ?string $tag = null): void
    {
        $this->external_references()->updateOrCreate(compact('provider', 'tag'), compact('reference'));
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
        $referenceable_type = static::class;
        $externalReference = ExternalReference::where(compact('reference', 'referenceable_type', 'provider', 'tag'))->first();
        if (!$externalReference) return null;
        return $externalReference->referenceable ?? null;
    }
}
