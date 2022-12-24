<?php include 'header.php' ?>
<?php
$db = mysql_connect("localhost", "lcc", "wavell"); 
mysql_select_db("lcc");
?>

<h2>Members List</h2>
<table>
 <tr>
  <th>Name</th>
  <th>Email</th>
  <th>Phone</th>
  <th>Mobile</th>
 </tr>
<?php
$query = mysql_query("select * from members");
while ($row = mysql_fetch_array($query)) {
 echo " <tr>\n";
 echo "  <td>" . $row["name"] . "</td>\n";
 echo "  <td>" . $row["email"] . "</td>\n";
 echo "  <td>" . $row["phone"] . "</td>\n";
 echo "  <td>" . $row["mobile"] . "</td>\n";
 echo " </tr>\n";
}
?>
</table>

<?php include 'footer.php' ?>
