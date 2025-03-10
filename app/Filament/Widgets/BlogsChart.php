<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;

class BlogsChart extends ChartWidget
{
    protected static ?string $heading = 'Blogs Over Time';
    protected static ?string $pollingInterview = "15s";
    protected static bool $isLazy = true;
    protected static ?int $sort = 3;
    protected function getData(): array
    {
        $data = Trend::model(Blog::class)
            ->between(
                start: now()->startOfMonth(),
                end: now()->endOfMonth(),
            )
            ->perDay()
            ->count();

        return [
            'datasets' => [
                [
                    'label' => 'BlOGS',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                    'borderColor' => '#FF69B4',
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

protected function getType(): string
{
return 'bar';
}

}