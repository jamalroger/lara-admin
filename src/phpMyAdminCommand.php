<?php

namespace LaraAdmin;

use Illuminate\Console\Command;

class phpMyAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phpmyadmin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'install phpMyAdmin in public html';

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
        // $out = null;
        exec("pwd", $out);
        // print_r($out);
        exec("sh " . __DIR__ . "/install_phpmyadmin.sh " . public_path());
    }
}
