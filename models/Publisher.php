<?php

namespace app\models;

use app\config\Database;
use app\helpers\SessionHelper;
use app\helpers\UtilHelper;

/**
 * @package app\models
 */
class Publisher extends Model
{

    protected static $table_name = 'publishers';

    public function __construct()
    {
    }
}
