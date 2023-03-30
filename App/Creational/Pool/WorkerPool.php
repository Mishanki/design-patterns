<?php

namespace App\Creational\Pool;

class WorkerPool implements \Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private array $occupiedWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private array $freeWorkers = [];

    /**
     * @return int
     */
    public function count(): int
    {
        return \count($this->occupiedWorkers) + \count($this->freeWorkers);
    }

    /**
     * @return StringReverseWorker
     */
    public function get(): StringReverseWorker
    {
        if (\count($this->freeWorkers) === 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    /**
     * @param StringReverseWorker $worker
     */
    public function dispose(StringReverseWorker $worker): void
    {
        $key = spl_object_hash($worker);
        if (isset($this->occupiedWorkers[$key])) {
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }
}
