<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Booking;
use App\models\Bus;

class PushNotificationScheduler extends Command
{
   protected $signature = 'send:pushNotifucation';
   protected $description = 'Send Push Notification';

   public function handle()
   {
      //$bookings = Booking::orderBy('id', 'DESC')->take(10)->get();

      $bookings = Booking::select('bus_id', 'pnr', 'source_id', 'destination_id', 'users_id')
         ->with('Bus', 'source', 'destination', 'users')
         ->orderBy('id', 'DESC')
         ->take(10)
         ->get();




      $this->info("Last 10 Bookings:");
      $this->line($bookings->toJson(JSON_PRETTY_PRINT));

      return 0;
   }
}
