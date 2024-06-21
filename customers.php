<?php
include './adminheader.php';
if(isset($_GET['did'])) {
    $id = $_GET['did'];
    mysqli_query($link, "delete from userregn where userid='$id'");
}

$result = mysqli_query($link, "select * from userregn");
    echo "<div id='view_prod'><table class='center_tab'><thead><tr><th colspan='7'><h4>CUSTOMER LIST</h4>";
    echo "<tr><th>Name<th>Gender<th>Address<th>Mobile<th>UserId<th>Password<th>Task";
    echo "<tbody>";
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            foreach($row as $k=>$r) {
                echo "<td>$r";
            }
            echo "<td><a href='customers.php?did=$row[4]' onclick=\"javascript:return confirm('Are You Sure to Delete Customer ?')\">Del</a>";
        }
    echo "</tbody></table></div>";
mysqli_free_result($result);

include './adminfooter.php';
?>