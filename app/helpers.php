<?php

use Carbon\Carbon;

if (! function_exists('getDurationString')) {
    function getDurationString($startTime, $endTime)
    {
        $start = Carbon::parse($startTime);
        $end = Carbon::parse($endTime);

        $diffInSeconds = $start->diffInSeconds($end);

        $minutes = floor($diffInSeconds / 60);
        $seconds = $diffInSeconds % 60;

        $result = [];

        if ($minutes > 0) {
            $result[] = $minutes . ' menit';
        }

        if ($seconds > 0) {
            $result[] = $seconds . ' detik';
        }

        return $result ? implode(' ', $result) : '0 detik';
    }
}
