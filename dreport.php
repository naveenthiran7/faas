<?php
include './adminheader.php';
$result = mysqli_query($link, "select p.id,p.dt,p.userid,u.name,p.pid,subcat,brand,dly,dlydt from purchase p,userregn u,products r where p.userid=u.userid and p.pid=r.id order by dlydt desc");
    echo "<div id='view_prod'><table class='center_tab'><thead><tr><th colspan='9'><h4>PRODUCT SALES REPORT</h4>";
    echo "<tr><th>P.Id<th>Date<th>Userid<th>Name<th>Prod.Id<th>Category<th>Brand<th>Delivered<th>Deliverd On";
    echo "<tbody>";
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            foreach($row as $k=>$r) {
                echo "<td>$r";
            }
            //echo "<td><a href='customers.php?did=$row[4]' onclick=\"javascript:return confirm('Are You Sure to Delete Customer ?')\">Del</a>";
        }
    echo "</tbody></table></div>";
mysqli_free_result($result);
include './adminfooter.php';
?>