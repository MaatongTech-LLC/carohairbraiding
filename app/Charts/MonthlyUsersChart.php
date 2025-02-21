<?php

namespace App\Charts;

use App\Models\User;
use ArielMejiaDev\LarapexCharts\LarapexChart;
use Illuminate\Support\Facades\DB;

class MonthlyUsersChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    /**
     * Write code on Method
     *
     * */
    public function build()
    {
        $usersByMonth = \App\Models\Booking::selectRaw('MONTH(date) as month, count(*) as total')
            ->whereYear('date', now()->year)
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $months = $usersByMonth->pluck('month');
        $userCounts = $usersByMonth->pluck('total');


        return $this->chart->lineChart()
            ->setTitle('Bookings during this year ' . date('Y'))
            ->addData('Bookings', $userCounts->toArray())
            ->setColors(['#BF9751'])
            ->setFontFamily('Inter, sans-serif, Arial')
            ->setXAxis($months->map(function ($month) {
                return \Carbon\Carbon::create()->month($month)->format('F');
            })->toArray());
    }
}
