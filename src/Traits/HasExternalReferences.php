<?php

namespace Ayzerobug\LaravelExternalReferences\Traits;

use Ayzerobug\LaravelExternalReferences\Models\ExternalReference;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\Cache;

trait HasExternalReferences
{
    /**
     * Define a polymorphic one-to-many relationship.
     *
     * @return MorphMany
     */
    public function externalReferences()
    {
        return $this->morphMany(ExternalReference::class, 'referenceable');
    }

    /**
     * Set a new external reference.
     *
     * @return $this
     */
    public function setExternalReference(string $reference, string $provider, ?string $tag = null): self
    {
        $this->externalReferences()->updateOrCreate(
            ['provider' => $provider,  'tag' => $tag],
            ['reference' => $reference]
        );

        return $this;
    }

    /**
     * Get the first reference for a given provider and tag.
     */
    public function getExternalReference(string $provider, ?string $tag = null): ?string
    {
        $cacheEnabled = config('external-references.caching', false);
        $cacheLifespan = config('external-references.cache_lifespan');
        $cacheKey = "external_references.provider:$provider,".self::class.":{$this->id},tag:$tag";

        $callback = function () use ($provider, $tag) {
            return $this->externalReferences()
                ->where('provider', $provider)
                ->where('tag', $tag)->first()?->reference;
        };

        if ($cacheEnabled) {
            return Cache::remember($cacheKey, now()->addSeconds($cacheLifespan), $callback);
        }

        return $callback();
    }

    /**
     * Find the model by external reference.
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
