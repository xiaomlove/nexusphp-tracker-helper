<?php

namespace NexusPlugin\Tracker\Filament\TrackerResource\Pages;

use Filament\Resources\Pages\Page;
use NexusPlugin\Tracker\Filament\TrackerResource;
use NexusPlugin\Tracker\Filament\Widgets\AgentStatus;
use NexusPlugin\Tracker\Filament\Widgets\BasicStatus;
use NexusPlugin\Tracker\Filament\Widgets\PeerStatus;
use NexusPlugin\Tracker\Filament\Widgets\PprofStatus;
use NexusPlugin\Tracker\Filament\Widgets\RequestStatus;
use NexusPlugin\Tracker\Filament\Widgets\SnatchedStatus;
use NexusPlugin\Tracker\Filament\Widgets\SystemResourceUsage;
use NexusPlugin\Tracker\Filament\Widgets\TorrentStatus;
use NexusPlugin\Tracker\Filament\Widgets\UserStatus;
use NexusPlugin\Tracker\Filament\Widgets\WorkerStatus;
use NexusPlugin\Tracker\Tracker;

class TrackerStatus extends Page
{
    protected static string $resource = TrackerResource::class;

    protected ?string $maxContentWidth = 'full';

//    protected static string $view = 'tracker::tracker-status';
//    protected static string $view = 'filament::pages.dashboard';
    protected static string $view = 'filament-panels::pages.dashboard';

    protected function getVisibleWidgets(): array
    {
        return Tracker::WIDGETS;
    }

    protected function getColumns(): int | array
    {
        return 2;
    }
}
