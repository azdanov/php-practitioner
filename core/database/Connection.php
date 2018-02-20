<?php

namespace App\Core\Database;

use PDO;
use PDOException;

/**
 * Class Connection.
 */
class Connection
{
    /**
     * Create a new PDO connection.
     *
     * @param string[] $config
     *
     * @return PDO|null pdo database connection
     *
     * @SuppressWarnings("exit")
     */
    public static function make(array $config): ?PDO
    {
       try {
            return new PDO(
                $config['connection'] . ';dbname=' . $config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            echo $e;

            return null;
        }
    }
}
