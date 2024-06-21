<?php
include './userheader.php';
$result = mysqli_query($link, "select p.id,p.dt,p.pid,r.subcat,r.brand,r.descr,r.price,r.pimage,p.dly,p.dlydt from purchase p,products r where r.id=p.pid and p.userid='$_SESSION[userid]'") or die(mysqli_error($link));
    echo "<div id='view_prod'>";
    if(mysqli_num_rows($result)>0) {
    echo "<table class='center_tab'><thead><tr><th colspan='10'><h4>PURCHASED ITEMS</h4>";
    echo "<tr><th>Pur.Id<th>Date<th>ProductId<th>Sub-Cat<th>Brand<th>Description<th>Price<th>Image<th>Dely.Status<th>Dly.Date";
    echo "<tbody>";
    $totprice=0;
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            foreach($row as $k=>$r) {
                if($k==5)
                    echo "<td style='width:300px;'>$r";
                else if($k==7)
                    echo "<td><img src='$r' width='50px' height='55px'>";                
                else
                    echo "<td>$r";
            }                        
        }    
    //echo "<tr><td class='center' colspan='9'><a href='mycart.php?confirm=$totprice'>Confirm Purchase</a>";
    echo "</tbody></table>";
    } else {
        echo "<div class='center'>There are No Purchase List in yout Account...!</center>";
    }
    echo "</div>";
mysqli_free_result($result);
include './userfooter.php';
?>