<?php

declare(strict_types=1);

namespace DesignPatternsPhp\Creational\Pool;

use function array_key_exists;
use function array_pop;
use function spl_object_id;

final class DatabaseConnectionPool
{
    /** @var DatabaseConnection[] */
    private array $freeDatabaseConnections = [];

    /** @var DatabaseConnection[] */
    private array $occupiedDatabaseConnections = [];

    public function get(): DatabaseConnection
    {
        $databaseConnection = array_pop($this->freeDatabaseConnections) ?? $this->createDatabaseConnection();
        $this->occupiedDatabaseConnections[$this->generateKeyForObject($databaseConnection)] = $databaseConnection;

        return $databaseConnection;
    }

    public function release(DatabaseConnection $databaseConnection): void
    {
        $key = $this->generateKeyForObject($databaseConnection);

        if (array_key_exists($key, $this->occupiedDatabaseConnections)) {
            unset($this->occupiedDatabaseConnections[$key]);
            $this->freeDatabaseConnections[$key] = $databaseConnection;
        }
    }

    private function createDatabaseConnection(): DatabaseConnection
    {
        return new DatabaseConnection();
    }

    private function generateKeyForObject(object $object): int
    {
        return spl_object_id($object);
    }
}
