<?php

namespace App\Console\Commands;

use File;
use Illuminate\Console\Command;

class RemoveCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'remove:cache {type? : allで全削除}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Laravelのキャッシュを削除するコマンド';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(
    ) {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->call('cache:clear');
        $this->call('config:clear');
        $this->call('route:clear');
        $this->call('view:clear');

        if ($this->argument('type') == 'all') {
            exec('composer dump-autoload');
            $this->call('clear-compiled');
            $this->call('optimize');
            $this->call('config:cache');
        }
    }
}
