<?php


//inclue the class result file here

$resultInstance=new Result($conn);

$query="SELECT * FROM your_table_name";
$stmt=$conn->prepare($query);  
$stmt->execute();
$stmt->store_result();
             
//now use the function
 $resuli=$resultInstance->get($stmt);

 //you can now iterate/loop your multiple result with **foreach**

   foreach($result as $data){
       echo $data["colunm_name_a"];
       echo $data["colunm_name_b"];
       echo $data["colunm_name_c"];
       echo $data["colunm_name_d"];
   } 

?>