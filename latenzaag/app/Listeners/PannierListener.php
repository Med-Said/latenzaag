<?php

namespace App\Listeners;

use App\Events\PannierEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class PannierListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  PannierEvent  $event
     * @return void
     */
    public function handle(PannierEvent $event)
    {
        $nbrArticles = session('nbrArticles');
        $nbrArticles += 1;
        session(['nbrArticles' => $nbrArticles]);


        $pannierArticlesIds = session('pannierArticlesIds');
        $pannierArticlesIds[ substr($event->article, 0, 1)  ] = $event->article;
        session(['pannierArticlesIds' => $pannierArticlesIds]);
    }
}
