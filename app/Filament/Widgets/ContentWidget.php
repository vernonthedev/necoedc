<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\TextWidget;
use App\Models\Quote;
use App\Models\Category;
use Filament\Support\Enums\IconPosition;

class ContentWidget extends BaseWidget
{
    protected ?string $heading = 'Admin Based Analytics';
    protected ?string $description = 'An overview of admin based analytics.';
    protected function getStats(): array
    {
        return [
            Stat::make("Content Widgets", TextWidget::count())
                ->description('All Content that needs to be Updated')
                ->descriptionIcon('heroicon-o-clipboard-document-list', IconPosition::Before)
                ->chart([10,20,10,70,30])
                ->color(color: 'info'),
            Stat::make("Quote Requests", Quote::count())
                ->description('All users that asked for a Quote/Consultation')
                ->descriptionIcon('heroicon-o-chat-bubble-left-right', IconPosition::Before)
                ->chart([1,3,40,10,20,40,70,90])
                ->color(color: 'success'),
            Stat::make("Course Categories", Category::count())
                ->description('All Categories for the listed Courses')
                ->descriptionIcon('heroicon-o-book-open', IconPosition::Before)
                ->chart([5,10,90])
                ->color(color: 'warning'),
        ];
    }
}
