<?php

namespace Ayzerobug\LaravelExternalReferences;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelExternalReferencesServiceProvider extends PackageServiceProvider
{
    //Configure Package
    public function configurePackage(Package $package): void
    {

        $package
            ->name('laravel-external-references')
            ->hasConfigFile()
            ->hasMigration('create_external_references_table');
    }
}
