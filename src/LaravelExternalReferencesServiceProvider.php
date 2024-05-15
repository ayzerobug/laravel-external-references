<?php

namespace Ayzerobug\LaravelExternalReferences;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelExternalReferencesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-external-references')
            ->hasMigration('create_external_references_table');
    }
}
