<?php

namespace App\Providers;

//use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        \App\Events\SubmissionSaved::class => [
            \App\Listeners\LogSubmissionSaved::class,
        ],
    ];
}