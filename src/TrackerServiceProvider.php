<?php
namespace NexusPlugin\Tracker;

use Filament\PluginServiceProvider;
use Illuminate\Console\Scheduling\Schedule;
use NexusPlugin\Tracker\Filament\TrackerResource;
use NexusPlugin\Tracker\Filament\Widgets\AgentStatus;
use NexusPlugin\Tracker\Filament\Widgets\BasicStatus;
use NexusPlugin\Tracker\Filament\Widgets\PeerStatus;
use NexusPlugin\Tracker\Filament\Widgets\PprofStatus;
use NexusPlugin\Tracker\Filament\Widgets\RequestStatus;
use NexusPlugin\Tracker\Filament\Widgets\SnatchedStatus;
use NexusPlugin\Tracker\Filament\Widgets\TorrentStatus;
use NexusPlugin\Tracker\Filament\Widgets\UserStatus;
use NexusPlugin\Tracker\Filament\Widgets\SystemResourceUsage;

use Spatie\LaravelPackageTools\Package;

class TrackerServiceProvider extends PluginServiceProvider
{
    protected array $resources = [
        TrackerResource::class,
    ];

    protected array $widgets = [
        BasicStatus::class,
        RequestStatus::class,
        UserStatus::class,
        TorrentStatus::class,
        PeerStatus::class,
        SnatchedStatus::class,
        AgentStatus::class,
        SystemResourceUsage::class,
        PprofStatus::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name(TrackerRepository::ID)
            ->hasTranslations()
            ->hasViews(TrackerRepository::ID)
        ;
    }

    protected function registerMacros(): void
    {
        $basePath = dirname(__DIR__);

        $this->loadRoutesFrom($basePath . '/routes/web.php');

        if ($this->app->runningInConsole()) {
            // Register the command if we are using the application via the CLI
//            $this->commands([
//                Checkout::class,
//                CheckoutCronjob::class,
//            ]);

            // Schedule the command if we are using the application via the CLI
            $this->app->booted(function () {
                /**
                 * @var \Illuminate\Console\Scheduling\Schedule  $schedule
                 */
                $schedule = $this->app->make(Schedule::class);
                $schedule->call(function() {
                    TrackerRepository::getInstance()->checkStatus();
                })
                    ->everyMinute()
                    ->name("go_tracker_check_status")
                    ->onOneServer()
                    ->withoutOverlapping()
                ;
//                $schedule->command('sticky_promotion:checkout_cronjob')->everyTenMinutes()->withoutOverlapping();

//                Event::listen(
//                    NewsCreated::class,
//                    [SendNewsToGroupChat::class, "handle"]
//                );

            });
        }

    }

}
