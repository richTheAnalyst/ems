<?php

namespace App\Filament\Widgets;

use App\Models\Blog;
use App\Models\Event;
use App\Models\Booking;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static ?int $sort = 2;
    protected static bool $isLazy = true;
    protected function getStats(): array
    {
        return [
            Stat::make('Total Events', Event::count())
                ->description('Total number of events')
                ->descriptionIcon('heroicon-m-calendar')
                ->color('success')
                ->chart([7, 3, 4, 5, 6, 3, 5, 3]),

            Stat::make('Total Bookings', Booking::count())
                ->description('Total number of bookings')
                ->descriptionIcon('heroicon-m-ticket')
                ->color('primary')
                ->chart([3, 5, 3, 7, 3, 4, 5, 6]),



            Stat::make('Total Users', User::count())
                ->description('Total registered users')
                ->descriptionIcon('heroicon-m-users')
                ->color('info')
                ->chart([5, 3, 7, 3, 4, 5, 6, 3]),


            Stat::make('Total Blogs', Blog::count())
                ->description('Total Blogs created')
                ->descriptionIcon('heroicon-m-document-text')
                ->color('secondary')
                ->chart([3, 5, 3, 3, 7, 3, 4, 6, 3]),
        ];
    }
}
