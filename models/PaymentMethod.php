<?php

namespace app\models;

use app\config\Database;
use app\helpers\SessionHelper;
use app\helpers\UtilHelper;

/**
 * @package app\models
 */
class PaymentMethod extends Model
{

    protected static $table_name = 'user_payment_methods';

    public function __construct()
    {
    }

    // user_id	payment_id

    public static function getAll()
    {
        $books  = self::table()
            ->select(
                'user_payment_methods.*',
                'users.name as user',
                'payments.name as payment',
            )
            ->join('payments', ["user_payment_methods.payment_id", "payments.id"])
            ->join('users', ["user_payment_methods.user_id", "users.id"])
            ->where('user_payment_methods.is_active', 1)
            ->all();

        return $books;
    }
}
