<?php

use App\Events\PushNotification;
use App\Models\User;
use Illuminate\Support\Facades\Schedule;

Schedule::call(function () {
    $users = User::has('babies')->get();

    foreach ($users as $user) {
        event(new PushNotification($user->babies->last()));
    }
})->hourly();
