<?php

declare(strict_types=1);

namespace Seeqeye\Lw4;

final class RateLimiter
{
    private int $limit;
    private int $interval;

    /**
     * @var array<int, int>
     */
    private array $requests = [];

    public function __construct(int $limit, int $interval)
    {
        $this->limit = $limit;
        $this->interval = $interval;
    }

    public function allow(): bool
    {
        $now = time();

        $filteredRequests = [];

        foreach ($this->requests as $timestamp) {
            if ($timestamp >= ($now - $this->interval)) {
                $filteredRequests[] = $timestamp;
            }
        }

        $this->requests = $filteredRequests;

        if (count($this->requests) < $this->limit) {
            $this->requests[] = $now;
            return true;
        }

        return false;
    }

    /**
     * @return array<int, int>
     */
    public function getRequests(): array
    {
        return $this->requests;
    }
}
