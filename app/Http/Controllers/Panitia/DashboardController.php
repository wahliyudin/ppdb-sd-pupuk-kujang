<?php

namespace App\Http\Controllers\Panitia;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('panitia.dashboard', [
            'breadcrumb' => [
                'title' => 'Dashboard',
                'path' => [
                    'Dashboard' => 0
                ]
            ]
        ]);
    }
}
