<?php

namespace App\Core\Database;

use PDO;

/**
 * Class QueryBuilder.
 */
class QueryBuilder
{
    /**
     * The PDO instance.
     *
     * @var PDO
     */
    protected $pdo;

    /**
     * Create a new QueryBuilder instance.
     *
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Select all records from a database table.
     *
     * @param string $table
     *
     * @return object[] containing selected records
     */
    public function selectAll(string $table): array
    {

        $statement = $this->pdo->query("select * from {$table}");

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    /**
     * Insert a record into a table.
     *
     * @param string              $table
     * @param array[string]string $parameters
     *
     * @SuppressWarnings("exit")
     */
    public function insert(string $table, array $parameters): void
    {
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':'.implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch (\Exception $e) {
            echo $e;
        }
    }
}
