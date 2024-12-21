<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class AdminChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Events';

    protected int | string | array $columnSpan = 1;

    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [10, 6, 3, 5, 7, 10, 7, 4, 6, 3],
                    'backgroundColor' => [  'rgb(3, 52, 36)',
                                            'rgb(5, 86, 60)',
                                            'rgb(6, 121, 84)',
                                            'rgb(8, 156, 108)',
                                            'rgb(10, 190, 132)',
                                            'rgb(12, 225, 156)',
                                            'rgb(65, 245, 187)',
                                            'rgb(134, 249, 212)',
                                            'rgb(203, 252, 236)', ],
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
