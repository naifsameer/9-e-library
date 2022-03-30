<?php

namespace app\models;

use app\config\Database;
use app\helpers\SessionHelper;
use app\helpers\UtilHelper;

/**
 * @package app\models
 */
class Category extends Model
{

    public static $table_name = 'categories';

    public function __construct()
    {
    }
}
