<?php

use Carbon\Carbon;

if (! function_exists('getDurationString')) {
    function getDurationString($startTime, $endTime)
    {
        $start = Carbon::parse($startTime);
        $end = Carbon::parse($endTime);

        $diffInSeconds = $start->diffInSeconds($end);

        $hours = floor($diffInSeconds / 3600);
        $minutes = floor(($diffInSeconds % 3600) / 60);
        $seconds = $diffInSeconds % 60;

        $result = [];

        if ($hours > 0) {
            $result[] = $hours . ' jam';
        }

        if ($minutes > 0 || ($hours > 0 && $seconds > 0)) {
            $result[] = $minutes . ' menit';
        }

        if ($seconds > 0 || empty($result)) {
            $result[] = $seconds . ' detik';
        }

        return implode(' ', $result);
    }
}
