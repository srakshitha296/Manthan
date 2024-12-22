<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class FacultyChartWidget extends ChartWidget
{
     protected static ?string $heading = 'Faculties';

    // protected int | string | array $columnSpan = 1;

    protected static ?string $maxHeight = '300px';


    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Number of Events been conducted',
                    'data' => [100, 200, 150, 250, 300],
                    'backgroundColor' => [  'rgb(27, 67, 50)',
                                            'rgb(45, 106, 79)',
                                            'rgb(64, 145, 108)',
                                            'rgb(82, 183, 136)',
                                            'rgb(116, 198, 157)',
                                            ],
                ],
            ],
            'labels' => ['Professor', 'Associate Professor', 'Assistant Professor', 'Guest Lecturer'],
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
