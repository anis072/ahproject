<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class ProjectCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:optimize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command optimize the performance of project';

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
        //
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
     //   Artisan::call('optimize');


    }
}
