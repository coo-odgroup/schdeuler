<?php
 
namespace App\Console\Commands;
 
use Illuminate\Console\Command;
 
class PushNotificationScheduler extends Command
{
    /**
     * The console command name.
     */
    protected $signature = 'send:pushNotifucation';
 
    /**
     * The console command description.
     */
    protected $description = 'send Push Notification';
 
    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = 'Push Notifucation';
        echo $name;
    }
}