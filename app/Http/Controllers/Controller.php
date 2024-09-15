<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;

abstract class Controller
{
    protected function redirect($to, $status, $message): RedirectResponse
    {
        return redirect($to)->with($status, $message);
    }

    protected function back($status, $message, $withInput = false): RedirectResponse
    {
        if ($withInput) {
            return redirect()->back()->withInput()->with($status, $message);
        }

        return redirect()->back()->with($status, $message);
    }


    protected function success($data = null, $message = null): JsonResponse
    {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], 200);
    }

    protected function error($message, $code = 500): JsonResponse
    {
        return response()->json([
            'status' => 'error',
            'message' => $message
        ], $code);
    }
}
