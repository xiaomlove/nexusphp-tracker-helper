<?php
namespace NexusPlugin\Tracker;

use Filament\Contracts\Plugin;
use Filament\Panel;
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

class TrackerHelper implements Plugin
{
    const ID = "tracker";
    public function getId(): string
    {
        return self::ID;
    }

    public function register(Panel $panel): void
    {
        $panel
            ->resources([
                TrackerResource::class,
            ])
            ->widgets([
                BasicStatus::class,
                RequestStatus::class,
                UserStatus::class,
                TorrentStatus::class,
                PeerStatus::class,
                SnatchedStatus::class,
                AgentStatus::class,
                SystemResourceUsage::class,
                PprofStatus::class,
            ])
        ;
    }

    public function boot(Panel $panel): void
    {

    }

    public static function make(): static
    {
        return app(static::class);
    }

}
