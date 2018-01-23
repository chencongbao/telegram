<?php

namespace App\Console\Commands;

use Telegram\Bot\Actions;
use Telegram\Bot\Api;
use Illuminate\Console\Command;

class SendMessageCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $api = new Api('544652750:AAHQQTudByaEvAg6Bmj-MKKy9OPzz8HkZmM');
        $r = $api->getMe();
        var_dump($r);
    }
}
