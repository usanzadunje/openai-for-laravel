<?php

namespace Usanzadunje\OpenAI;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Usanzadunje\OpenAI\Commands\OpenAICommand;

class OpenAIServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('openai-for-laravel')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_openai-for-laravel_table')
            ->hasCommand(OpenAICommand::class);
    }
}
