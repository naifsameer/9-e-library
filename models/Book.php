<?php

namespace app\models;

use app\config\Database;
use app\helpers\SessionHelper;
use app\helpers\UtilHelper;

/**
 * @package app\models
 */
class Book extends Model
{

    protected static $table_name = 'books';

    public function __construct()
    {
    }

    /**
     * author_id:2
     *   category_id:13
        created_at:"2022-04-01 01:09:38"
        created_by:null
        description:"This book is good"
        format:"pdf"
        id:20
        image:"xbop4e2OGrfszN1648764151.jpg"
        is_active:1
        pages_number:100
        price:1000
        publisher_id:1
        quantity:10
        title:"Web3"
        updated_at:"2022-04-01 01:09:38"

     */


    // SELECT Orders.OrderID, Customers.CustomerName
    // FROM Orders
    // INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID;

    // SELECT * FROM `books`  JOIN `categories` ON books.category_id = categories.id JOIN `authors` ON books.author_id = authors.id WHERE books.is_active = '1'

    /* 
    SELECT
    student.first_name,
    student.last_name,
    course.name
    FROM student
    JOIN student_course
    ON student.id = student_course.student_id
    JOIN course
    ON course.id = student_course.course_id;
    */



    public static function getAll()
    {
        $books  = self::table()
            ->select(
                'books.*',
                'categories.name as category',
                'authors.name as author',
                'publishers.name as publisher'
            )
            ->join('categories', ["books.category_id", "categories.id"])
            ->join('authors', ["books.author_id", "authors.id"])
            ->join('publishers', ["books.publisher_id", "publishers.id"])
            ->where('books.is_active', 1)
            ->all();

        return $books;
    }
}
