<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;
use Artisan;

class IdeHelperGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'refresh-idehelper';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate ide-helper docs.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if (App::environment('local')) {
            Artisan::call('ide-helper:generate');
        }
    }
}
