<?php


echo "<select>";

// ir 100 anos atrás
for ($i=date("Y"); $i >= date("Y")-100; $i --) {

      echo $i."<br>";

 echo '<option value ="'.$i.'">'.$i.'</option>';

}




  ?>