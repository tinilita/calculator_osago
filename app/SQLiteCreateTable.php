<?php

namespace App;

/**
 * SQLite Create Table Demo
 */
class SQLiteCreateTable
{

    /**
     * PDO object
     * @var \PDO
     */
    private $pdo;

    /**
     * connect to the SQLite database
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * create tables
     */
    public function createTables()
    {

    }

    /**
     * get the table list in the database
     */
    public function getTableList(): array
    {

        $stmt = $this->pdo->query("SELECT row
                               FROM region");
        $tables = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $tables[] = $row['text'];
        }

        return $tables;
    }
}