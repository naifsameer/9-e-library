<?php

namespace app\models;

use app\config\Database;

class Model extends Database
{
  private function __construct()
  {
  }

  public static function table(string $table_name)
  {
    return Database::getInstance()->setTable($table_name);
  }
}
