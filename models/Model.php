<?php

namespace app\models;

use app\config\Database;

class Model extends Database
{
  protected static $table_name;

  private function __construct()
  {
  }

  public static function table()
  {
    return Database::getInstance()->setTable(static::$table_name);
  }


  public static function getAll()
  {
    $result  = self::table()
      ->select()
      ->where('is_active', 1)
      ->all();

    return $result;
  }

  public static function getOneByID($id)
  {
    $result  = self::table(self::$table_name)
      ->select()
      ->where('id', $id)
      ->one();

    return $result;
  }

  public static function add($data)
  {
    return self::table()->insert($data)->run();
  }
}
