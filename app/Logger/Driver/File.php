<?php

namespace App\Logger\Driver;

class File implements LogDriverInterface
{
    protected string $logFile;

    public function __construct(string $logFile)
    {
    }

    public function setUp(): void
    {
        // TODO: Implement setUp() method.
    }

    public function log(string $message, int $level): void
    {
        // TODO: Implement log() method.
    }

    public function tearDown(): void
    {
        // TODO: Implement tearDown() method.
    }
}