<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class UserChartWidget extends ChartWidget
{
    protected static ?string $heading = 'User';

    // protected int | string | array $columnSpan = 1;

     protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'User type',
                    'data' => [100, 200, 150, 250],
                    'backgroundColor' => [  'rgb(27, 67, 50)',
                                            'rgb(45, 106, 79)',
                                            'rgb(64, 145, 108)',
                                            'rgb(82, 183, 136)',
                                             ],
                ],
            ],
            'labels' => ['Principals', 'Department Heads', 'Faculties', 'Students'],
            
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
