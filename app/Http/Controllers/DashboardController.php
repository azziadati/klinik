<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Show the dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // You can add any necessary data retrieval logic here
        $salesChartData = $this->getSalesChartData();
        $mobileAppsChartData = $this->getMobileAppsChartData();
        $tasksChartData = $this->getTasksChartData();

        return view('dashboard', [
            'salesChartData' => $salesChartData,
            'mobileAppsChartData' => $mobileAppsChartData,
            'tasksChartData' => $tasksChartData,
        ]);
    }

    /**
     * Example method to fetch sales chart data.
     *
     * @return array
     */
    private function getSalesChartData()
    {
        // Example data, replace with actual data retrieval logic
        return [
            'labels' => ["M", "T", "W", "T", "F", "S", "S"],
            'datasets' => [
                [
                    'label' => "Sales",
                    'data' => [50, 20, 10, 22, 50, 10, 40],
                    'backgroundColor' => "rgba(255, 255, 255, .8)",
                ]
            ],
        ];
    }

    /**
     * Example method to fetch mobile apps chart data.
     *
     * @return array
     */
    private function getMobileAppsChartData()
    {
        // Example data, replace with actual data retrieval logic
        return [
            'labels' => ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            'datasets' => [
                [
                    'label' => "Mobile apps",
                    'data' => [50, 40, 300, 320, 500, 350, 200, 230, 500],
                    'backgroundColor' => "rgba(255, 255, 255, .8)",
                ]
            ],
        ];
    }

    /**
     * Example method to fetch tasks chart data.
     *
     * @return array
     */
    private function getTasksChartData()
    {
        // Example data, replace with actual data retrieval logic
        return [
            'labels' => ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            'datasets' => [
                [
                    'label' => "Tasks",
                    'data' => [50, 40, 300, 220, 500, 250, 400, 230, 500],
                    'backgroundColor' => "rgba(255, 255, 255, .8)",
                ]
            ],
        ];
    }
}
