## INTRODUCTION
This is a PHP package for web hosting servers who don't have mysqlnd  or mysql drivers installed and also an alternative to using *fetchAll(PDO::FETCH_ASSOC)* in PHP PDO or *$stmt->get_result()* in Object oriented programming style of PHP,

## NOTE
some web servers still uses version less than PHP 7+ without mysqlnd installed and thus this returns an error when you call *mysqli_stmt_get_result()* or *$stmt->get_result()* normally this  would works  on localhost

## HOW TO USE
use it with php written in Object oriented programming style excluding PHP PD0 or procedural style, since PDO already has **fetchAll(PDO::FETCH_ASSOC)**



## AUTHOR
**@Olarinde bukunmi**
*2022*
