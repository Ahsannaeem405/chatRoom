<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
class DailyUserClear extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'daily:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This will clean db daily';

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
     * @return int
     */
    public function handle()
    {
        // return 0;
        User::getQuery()->where('type_user', 'guest')->delete();
        echo 'The guest user successfully deleted!';
    }
}
