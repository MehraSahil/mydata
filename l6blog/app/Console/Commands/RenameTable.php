<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class RenameTable extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mydata:rename{from?} {to}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Rename table old table to new table';

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
        $from = $this->argument('from');
        $to = $this->argument('to');
        DB::statement("Alter Table $from RENAME TO $to");
        $this->ask('Do you want to change renam table name');
        $this->info('table $from rename To $to');
    }
}
