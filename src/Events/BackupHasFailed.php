<?php

namespace Spatie\Backup\Events;

use Spatie\Backup\BackupDestination\BackupDestination;
use Exception;
use Illuminate\Support\Facades\Log;

class BackupHasFailed
{
    /** @var \Exception */
    public $exception;

    /** @var \Spatie\Backup\BackupDestination\BackupDestination|null */
    public $backupDestination;

    /** @var  array|null */
    public $databases;

    /**
     * @param \Exception                                              $exception
     * @param \Spatie\Backup\BackupDestination\BackupDestination|null $backupDestination
	 * @param array $databases
     */
    public function __construct(Exception $exception, BackupDestination $backupDestination = null, $databases = null)
    {
        $this->exception = $exception;
        $this->backupDestination = $backupDestination;
        $this->databases = $databases;
    }
}
