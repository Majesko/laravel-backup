<?php

namespace Spatie\Backup\Events;

use Spatie\Backup\BackupDestination\BackupDestination;

class BackupWasSuccessful
{
    /**
     * @var \Spatie\Backup\BackupDestination\BackupDestination
     */
    public $backupDestination;

    public $databases;

    /**
     * @param \Spatie\Backup\BackupDestination\BackupDestination $backupDestination
     */
    public function __construct(BackupDestination $backupDestination, $databases)
    {
        $this->backupDestination = $backupDestination;
        $this->databases = $databases;
    }
}
