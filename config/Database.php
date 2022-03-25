<?php

namespace app\config;

$dns = "mysql:host=localhost";
$username = 'root';
$password = '';
$database_name = 'e-library';

/**
 * where
 */
trait where
{
  public function where(string $key, string $value)
  {
    $this->db_query .= " WHERE $key = '$value'";

    return $this;;
  }

  public function orWhere(string $key, string $value)
  {
    $this->db_query .= " OR `$key` = '$value'";

    return $this;;
  }

  public function and(string $key, string $value)
  {
    $this->db_query .= " AND `$key` = '$value'";

    return $this;;
  }
}

/**
 * runQuery functions
 */
trait runQuery
{
  public function get()
  {
    $statement = $this->conn->prepare($this->db_query);
    $statement->execute();

    $this->db_query = "";

    return $statement->fetch();
  }

  public function getAll()
  {
    $statement = $this->conn->prepare($this->db_query);
    $statement->execute();

    $this->db_query = "";

    return $statement->fetchAll();
  }

  public function run()
  {
    $result =  $this->conn->prepare($this->db_query)->execute();

    $this->db_query = "";

    return $result;
  }
}

/**
 * join
 */
trait join
{

  /** 
   * @param array $table_list [$key, $value]
   */
  public function innerJoin(string $table_name, array $table_list)
  {
    if (count($table_list) !== 2) {
      throw new \Exception('table list must be two items');
    }

    $select_tables = "{$table_list[0]} = {$table_list[1]}";

    $this->db_query .= " INNER JOIN `{$table_name}` ON " . $select_tables;
    return $this;
  }

  /** 
   * @param array $table_list [$key, $value]
   */
  public function leftJoin(string $table_name, array $table_list)
  {
    if (count($table_list) !== 2) {
      throw new \Exception('table list must be two items');
    }

    $select_tables = "{$table_list[0]} = {$table_list[1]}";

    $this->db_query .= " LEFT JOIN `{$table_name}` ON " . $select_tables;
    return $this;
  }

  /** 
   * @param array $table_list [$key, $value]
   */
  public function outerJoin(string $table_name, array $table_list)
  {
    if (count($table_list) !== 2) {
      throw new \Exception('table list must be two items');
    }

    $select_tables = "{$table_list[0]} = {$table_list[1]}";

    $this->db_query .= " FULL OUTER JOIN `{$table_name}` ON " . $select_tables;
    return $this;
  }
}

/**
 * queryBy
 */
trait queryBy
{
  /** order by
   * @param string $column_name 
   * @param string  $order_type  ASC | DESC
   */
  public function orderBy(string $column_name, string $order_type = "ASC")
  {
    $this->db_query .= " ORDER BY '$column_name' $order_type ";

    return $this;
  }

  public function groupBy(string $column_name)
  {
    $this->db_query .= " GROUP BY '$column_name'  ";

    return $this;
  }
}

class Database
{
  use where, runQuery, join, queryBy;

  private $conn;
  private $table_name;
  private $db_query;

  public static $dns;
  public static $username;
  public static $password;
  public static $database_name;

  public static $instance;

  private function __construct()
  {

    $this->conn = new \PDO(self::$dns, self::$username, self::$password, [
      \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
      \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
    ]);

    $db_name = self::$database_name;

    // create database
    $this->conn->exec("CREATE DATABASE IF NOT EXISTS `$db_name`; USE `$db_name`");
  }

  public static function getInstance()
  {
    if (self::$instance == null) {
      self::$instance = new Database();
    }

    return self::$instance;
  }

  public function createTable(string $table_name, array $table_data)
  {
    // create table
    $table_columns = "";
    foreach ($table_data as $key => $value) {
      $table_columns .= "`$key` $value ,";
    }

    $this->db_query = "CREATE TABLE IF NOT EXISTS `$table_name` ( 
          `{$table_name}ID` INT NOT NULL AUTO_INCREMENT ,
          $table_columns
          `is_active` INT DEFAULT 1 ,
          PRIMARY KEY (`{$table_name}ID`));
    )";
    $this->run();

    return $this;
  }

  public function setTable(string $table_name)
  {
    $this->table_name = $table_name;

    return $this;
  }

  public function select(
    ...$table_columns
  ) {
    // check param
    if (count($table_columns)) {
      $columns_name = "";

      foreach ($table_columns as $column) {
        $columns_name .= "$column ,";
        // $columns_name .= "`$column` ,";
      }

      // remove last comma
      $columns_name = substr($columns_name, 0, -1);
    } else {
      $columns_name = "*";
    }


    $query = "SELECT $columns_name FROM `{$this->table_name}` ";

    $this->db_query = $query;

    return $this;
  }

  /** insert
   * @param array $table_data [$key=>$value]
   */
  public function insert(array $table_data)
  {
    $columns = '';
    $values = '';

    foreach ($table_data as $key => $value) {
      $columns .= "`$key` ,";
      $values .= "'$value' ,";
    }

    $columns = substr($columns, 0, -1);
    $values = substr($values, 0, -1);

    $this->db_query = "INSERT INTO `{$this->table_name}` ($columns) VALUES ({$values})";

    return $this;
  }

  /** update
   * @param array $table_data [ [$key=>$value] ]
   */
  public function update(array $table_data)
  {
    $params = [];

    foreach ($table_data as $key => $value) {
      $params[] = "`$key` = '$value'";
    }

    $this->db_query  = "UPDATE `{$this->table_name}` SET " . implode(',', $params);

    return $this;
  }

  public function delete()
  {
    $this->db_query = "DELETE FROM `{$this->table_name}` ";

    return $this;
  }

  public function count(string $table_column)
  {
    $this->db_query = " SELECT COUNT('$table_column') FROM `$this->table_name` ";

    return $this;
  }

  public function limit(int $number)
  {
    $this->db_query .= " LIMIT $number ";

    return $this;
  }

  // query used only for add primary key or some magic things :)
  public function query($query)
  {
    $this->db_query = $query;
    $this->run();

    return $this;
  }

  // for testing
  public function getQuery()
  {
    return $this->db_query;
  }
}

Database::$dns = $dns;
Database::$username = $username;
Database::$password = $password;
Database::$database_name = $database_name;
