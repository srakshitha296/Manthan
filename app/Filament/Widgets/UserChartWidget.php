<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use App\Models\User;

class UserChartWidget extends ChartWidget
{
    use InteractsWithPageFilters;

    protected static ?string $heading = 'User';

    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        // Dynamically fetch data for each user type
        $userCounts = [
            'Principals' => User::where('role', 'Principle')->count(),
            'Department Heads' => User::where('role', 'HoD')->count(),
            'Faculties' => User::where('role', 'faculty')->count(),
            'Students' => User::where('role', 'student')->count(),
        ];

        return [
            'datasets' => [
                [
                    'label' => 'User type',
                    'data' => array_values($userCounts), 
                    'backgroundColor' => [
                        'rgb(27, 67, 50)',
                        'rgb(45, 106, 79)',
                        'rgb(64, 145, 108)',
                        'rgb(82, 183, 136)',
                    ],
                ],
            ],
            'labels' => array_keys($userCounts), 
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
