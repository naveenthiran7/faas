<?php
include './adminheader.php';
if(isset($_GET['pid'])) {
    $dt = date('Y-m-d',time());
    mysqli_query($link, "update purchase set dly='delivered',dlydt='$dt' where id=$_GET[pid]");
}
$result = mysqli_query($link, "select p.id,r.pimage,p.dt,p.userid,u.name,bank,accno from purchase p,userregn u,products r where p.userid=u.userid and p.pid=r.id and p.dly='pending' order by p.dt");
    echo "<div id='view_prod'><table style='margin:auto;'>";
    $i=0;
    while($row = mysqli_fetch_row($result)) {        
        if($i==0||$i%3==0)
            echo "<tr>";
        $i++;
        echo "<td><table class='center_tab'>";
        echo "<tr><td colspan='2'>Product Id</td><td>$row[0]</td></tr>";
        echo "<tr><td rowspan='5'><img src='$row[1]' width='100px' height='120px' style='vertical-align:middle;'/></td>";
        echo "<td>Date</td><td>$row[2]</td></tr>";
        echo "<tr><td>Userid</td><td>$row[3]</td></tr>";
        echo "<tr><td>Name</td><td>$row[4]</td></tr>";
        echo "<tr><td>Bank</td><td>$row[5]</td></tr>";
        echo "<tr><td class='right'>Accno</td><td>$row[6]</td></tr>";
        echo "<tr><th colspan='3'><a href='delivery.php?pid=$row[0]' onclick=\"javascript:return confirm('Are You Sure to Deliver the Product ?')\">Deliver Product</a></th></tr>";
        echo "</table></td>";
    }
    echo "</table></div>";
mysqli_free_result($result);
include './adminfooter.php';
?>