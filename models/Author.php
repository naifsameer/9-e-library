<?php

namespace app\models;

use app\config\Database;
use app\helpers\SessionHelper;
use app\helpers\UtilHelper;

/**
 * @package app\models
 */
class Author extends Model
{

    protected static $table_name = 'authors';

    public function __construct()
    {
    }
}
