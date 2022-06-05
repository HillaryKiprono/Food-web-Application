<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<table class="table">
  <thead>
    <tr>
<th>ID</th>
<th>Description</th>
<th>Price</th>
<th colspan=2 align="center">ACTION</th>
</tr></thead><tbody>
<?php
include "config.php";

$qry="select * from fooditem";
$recset=mysqli_query($conn,$qry);
while ($row=mysqli_fetch_array($recset))
{
      echo "<td>";
      echo $row["id"];
      echo "</td>";
      echo "<td>";
      echo $row["food_name"];
      
      echo "</td>";
      echo "<td>";
      echo $row["food_price"];

      echo "</td>";
      echo "<td>";
      echo $row["food_code"];

      echo "</td>";
      echo "<td>";
      echo $row["image"];
      
      echo "</td>";
      $ItemID=$row["id"];
      echo "<td>";
      echo "<a href='del.php?key=$ItemID'>DELETE</>";
      echo "</td>";
      // echo "<TD><a href='modify.php?key=$ItemID'>MODIFY</>";
      echo "</td></tr>";
}      
?>
</tbody>
</table>