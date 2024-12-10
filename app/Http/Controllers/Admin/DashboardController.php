<?php

namespace App\Http\Controllers\Admin;

use App\Charts\MonthlyUsersChart;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(MonthlyUsersChart $chart)
    {
        $clients = User::where('role', 'client')->count();
        $services = Service::count();
        $booking = Booking::whereNot('status', 'confirmed')->count();

        return view('admin.dashboard', [
            'clients' => $clients,
            'services' => $services,
            'booking' => $booking,
            'chart' => $chart->build()
        ]);
    }
}
