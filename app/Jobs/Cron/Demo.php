<?php
/**
 * This file contains the Demo cron job
 */

namespace PentaPaper\Connect\Jobs\Cron;

use Charm\Crown\Cronjob;

/**
 * Class Demo
 *
 * Demo cron job
 */
class Demo extends Cronjob
{
    /**
     * Cron job configuration
     */
    protected function configure()
    {
        $this->setName('PPC Demo command')
            ->runWeekly();
    }

    /**
     * Run that job.
     *
     * @return bool
     */
    public function run()
    {
        return true;
    }
}