<?php

namespace app\models;

/**
 * @package app\models
 */
class User extends Model
{

    protected static $table_name = 'users';

    public function __construct()
    {
    }

    public static function getAll()
    {
        $books  = self::table()
            ->select(
                'users.*',
                'roles.name as role',
            )
            ->join('roles', ["users.role_id", "roles.id"])
            ->where('users.is_active', 1)
            ->all();

        return $books;
    }
}
