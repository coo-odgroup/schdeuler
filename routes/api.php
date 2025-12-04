<?php
use App\Console\Commands\PushNotificationScheduler;

Route::get('/handler', [PushNotificationScheduler::class, 'handle']);
