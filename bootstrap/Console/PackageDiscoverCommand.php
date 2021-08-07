<?php

namespace Bootstrap\Console;

use Illuminate\Console\Command;

class PackageDiscoverCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'package:discover';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rebuild the cached package manifest';

    /**
     * Execute the console command.
     *
     * @param PackageManifest $manifest
     * @return void
     */
    public function handle(PackageManifest $manifest)
    {
        $manifest->build();

        foreach (array_keys($manifest->getManifest()) as $package) {
            $this->line("Discovered Package: <info>{$package}</info>");
        }

        $this->info('Package manifest generated successfully.');
    }
}
