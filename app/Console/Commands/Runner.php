<?php

namespace App\Console\Commands;

use App\Models\Models\Awb;
use App\Models\User;
use Illuminate\Console\Command;

class Runner extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'code';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle() : void
    {
        dd(User::query()->first()->hotURLS);
    }
}
