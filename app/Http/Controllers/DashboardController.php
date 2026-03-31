<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'contacts' => 12400,
            'campaigns' => 82,
            'sent' => 244000,
            'delivered' => 240100,
            'failed' => 3900,
            'open_rate' => 42.6,
            'click_rate' => 9.4,
            'unsubscribed' => 88,
            'scheduled' => 6,
        ];

        return view('dashboard.index', compact('stats'));
    }
}
