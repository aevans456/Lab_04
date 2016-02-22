
<?php

echo '<table id="t" >';
for($j=0;$j<=100;$j++)
{

    echo"<th>".$j."</th>";


}
for($i=1;$i <= 100;$i++)
   {
     echo"<tr>";
     echo"<th>". $i. "</th>";
      for($j=1;$j<=100;$j++)
      {

          $n = $i*$j;
          echo" <td>" . $n . "</td>";
      }
      echo"</tr>";
    }





?>
