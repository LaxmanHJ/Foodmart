<?php
   $name = $_POST["search"];
   //echo $name;
   $fruits = array("mangoes","mango","apples","Watermellon","apple","banana","bananas","citrus","orange","oranges","grapes","berries"); // You can set multiple check conditions here
   $vegetables = array("capsicum","beans","ladysfinger","redchilli","beans","carrot","cauliflower","garlic","potato","pumpkin"); // You can set multiple check conditions here
   if (in_array($name, $fruits)) //Founds a match !
   {
       header("Location:fruitspage.php"); 
   }
   
   else if (in_array($name, $vegetables)) //Founds a match !
   {
       header("Location:vegetablespage.php"); 
   }
   else{
         $page=$_SERVER['HTTP_REFERER'];
       header("Location:$page");
   }
?>