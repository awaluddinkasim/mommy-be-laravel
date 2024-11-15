<?php

namespace App\Http\Utils;

class OneSignal
{
    public static function sendToAll($message)
    {
        $fields = [
            'app_id' => config('onesignal.app_id'),
            'contents' => [
                'en' => $message
            ],
            'target_channel' => 'push',
            'included_segments' => ['All'],
        ];

        self::send($fields);
    }

    public static function sendToUser($user, $message)
    {
        $fields = [
            'app_id' => config('onesignal.app_id'),
            'contents' => [
                'en' => $message
            ],
            'target_channel' => 'push',
            'include_aliases' => [
                'external_id' => [$user]
            ],
        ];

        self::send($fields);
    }

    private static function send($fields)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.onesignal.com/notifications');
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Key ' . config('onesignal.rest_api_key')
        ]);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);

        $response = curl_exec($ch);

        if ($response === false) {
            echo 'Curl error: ' . curl_error($ch);
        } else {
            $responseData = json_decode($response, true);
            print_r($responseData);
        }

        curl_close($ch);
    }
}
