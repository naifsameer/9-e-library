<?php

namespace app\models;

use app\config\Database;
use app\helpers\SessionHelper;
use app\helpers\UtilHelper;

/**
 * @package app\models
 */
class Payment extends Model
{

    protected static $table_name = 'payments';

    public function __construct()
    {
    }
}
