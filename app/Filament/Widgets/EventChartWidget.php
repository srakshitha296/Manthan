<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class EventChartWidget extends ChartWidget
{

    protected static ?string $heading = 'Events';

    // protected int | string | array $columnSpan = 1;

    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Number of Events been conducted',
                    'data' => [10, 6, 3, 5, 7, 10, 7, 4, 6, 3],
                    'backgroundColor' => [  'rgb(8, 28, 21)',
                                            'rgb(27, 67, 50)',
                                            'rgb(45, 106, 79)',
                                            'rgb(64, 145, 108)',
                                            'rgb(82, 183, 136)',
                                            'rgb(116, 198, 157)',
                                            'rgb(149, 213, 178)',
                                            'rgb(183, 228, 199)',
                                            'rgb(216, 243, 220)',
                                            'rgb(216, 243, 220)',
                                             ],
                ],
            ],
            'labels' => ['FDP', 'SDP', 'STTP', 'Workshop', 'Seminar', 'Conference', 'Webinar', 'Hackathon', 'Bootcamp', 'Other'],
            
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
