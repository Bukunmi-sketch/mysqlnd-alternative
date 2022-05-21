<?php

  /**  
   * include the file/paste your database connection details here
   *   include database_connection file;
      assume $conn holds the database conn 
*/



   class Result{

            private $db;
          
            public function __construct($conn)
            {
                $this->db= $conn;
            }
  

            public function get($arg)
            {
               $result=[];
               $arg->store_result();
               
               for($i=0; $i<$arg->num_rows; $i++){
                   $m=$arg->result_metadata();
                   $param=[];
               
               while($field=$m->fetch_field()){
                   $param[]= &$result[$i][$field->name];
               }
               call_user_func_array(array($arg,'bind_result'),$param);
               
               $arg->fetch();
               }
               $arg->free_result();
               return $result;
            }




   }




?>