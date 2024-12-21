<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class MonthlyEventRegistrationChartWidget extends ChartWidget
{
    protected static ?string $heading = 'Monthly event registrations';

    // protected int | string | array $columnSpan = 1;

    protected static ?string $maxHeight = '300px';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Monthly event registrations',
                    'data' => [65, 59, 80, 81, 56, 55, 40, 67, 70, 66, 80, 70],
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
                                            'rgb(183, 228, 199)',
                                            'rgb(216, 243, 220)', ],
                    'borderColor' => [  'rgb(8, 28, 21)',
                                            'rgb(27, 67, 50)',
                                            'rgb(45, 106, 79)',
                                            'rgb(64, 145, 108)',
                                            'rgb(82, 183, 136)',
                                            'rgb(116, 198, 157)',
                                            'rgb(149, 213, 178)',
                                            'rgb(183, 228, 199)',
                                            'rgb(216, 243, 220)',
                                            'rgb(216, 243, 220)',
                                            'rgb(183, 228, 199)',
                                            'rgb(216, 243, 220)', ],
                    'borderWidth' => 1
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
