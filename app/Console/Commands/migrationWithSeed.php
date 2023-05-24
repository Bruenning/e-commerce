<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class migrationWithSeed extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'gui:miseed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->call('migrate:fresh');
        $this->call('db:seed');

        $this->info('Database was refreshed and seeded.');
    }
}
