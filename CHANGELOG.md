# Changelog

All notable changes to `laravel-external-references` will be documented in this file.

## Added caching logic - 2024-09-08

### Release Note: Caching Feature for External References

We are excited to announce the introduction of a new **caching feature** for external references in this release. This enhancement improves the performance and efficiency of retrieving external references by storing frequently accessed data in cache, reducing database load and speeding up response times.

#### Key Features:

- **Automatic Caching**: External references are now automatically cached when `external-references.caching` is enabled in the configuration.
- **Custom Cache Lifespan**: Control the cache duration via the `external-references.cache_lifespan` setting, ensuring data is updated as frequently as needed.
- **Provider & Tag-based Caching**: Cache keys are dynamically generated based on the provider, tag, and associated entity, allowing unique cache entries for each combination.
- **Graceful Fallback**: If caching is disabled, the system will continue to function normally, querying the database directly for external references.

#### How It Works:

When enabled, the system checks for cached external references before querying the database. If the reference is not found in cache, it retrieves the reference from the database and stores it in cache for future use. This ensures that subsequent requests are served faster by fetching data directly from the cache.

## Ready for Usage - 2024-05-19

This package is now ready for usage

## First Release - 2024-05-15

First release of laravel-external-references
