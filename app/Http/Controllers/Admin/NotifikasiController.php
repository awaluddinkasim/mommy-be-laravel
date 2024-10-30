<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NotifikasiController extends Controller
{
    public function index(): View
    {
        return view('pages.notifikasi', [
            'notifications' => Notification::all(),
        ]);
    }

    public function destroy(Notification $notification): RedirectResponse
    {
        $notification->delete();
        return redirect()->back();
    }
}
