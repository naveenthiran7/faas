<?php
include './userheader.php';
if(isset($_GET['did'])) {
    $id = $_GET['did'];
    mysqli_query($link, "delete from cart where id=$id");
}
if(!isset($_GET['confirm'])&&!isset($_POST['submit'])) {
$result = mysqli_query($link, "select c.id,p.id,cat,subcat,brand,descr,price,pimage from products p,cart c  where c.pid=p.id and c.userid='$_SESSION[userid]' order by cat,subcat,c.id") or die(mysqli_error($link));
    echo "<div id='view_prod'>";
    if(mysqli_num_rows($result)>0) {
    echo "<table class='center_tab'><thead><tr><th colspan='9'><h4>ITEMS IN YOUR CART</h4>";
    echo "<tr><th>Id<th>PId<th>Category<th>Sub-Cat<th>Brand<th>Descr<th>Price<th>Image<th>Task";
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
            $totprice += $row[6];
            echo "<td><a href='mycart.php?did=$row[0]' onclick=\"javascript:return confirm('Are You Sure to Delete from Cart ?')\">Del</a>";
        }
    echo "<tr><td colspan='6' class='right'>Total Amount<td colspan='3'>$totprice";
    echo "<tr><td class='center' colspan='9'><a href='mycart.php?confirm=$totprice'>Confirm Purchase</a>";
    echo "</tbody></table>";
    } else {
        echo "<div class='center'>There are No Items in Your Cart...!</center>";
    }
    echo "</div>";
mysqli_free_result($result);
} else if(isset($_GET['confirm'])&&!isset($_POST['submit'])) {
    $totprice = $_GET['confirm'];
?>
<form name="f" action="mycart.php" method="post">
    <table class="center_tab">
	<thead>
	    <tr>
                <th colspan="2"><h4>PAYMENT INFO</h4></th>
	    </tr>
	</thead>
	<tbody>
	    <tr>
		<th>Bank Name</th>
                <td><input type="text" name="bank" required autofocus></td>
	    </tr>
            <tr>
		<th>Account No</th>
                <td><input type="text" name="accno" required></td>
	    </tr>
            <tr>
		<th>Price</th>
                <td><input type="text" name="price" value="<?php echo $totprice?>" readonly required></td>
	    </tr>
	</tbody>
	<tfoot>
	    <tr>
		<td colspan="2" class="center">
		    <input type="submit" name="submit" value="Confirm Purchase">
		</td>
	    </tr>
	</tfoot>
    </table>
</form>
<?php
} else if(isset($_POST['submit'])) {
    $dt = date('Y-m-d',time());    
    $userid = $_SESSION['userid'];
    $bank = $_POST['bank'];
    $accno = $_POST['accno'];    
    $result = mysqli_query($link, "select pid from cart where userid='$userid'");
        while($row=  mysqli_fetch_row($result)) {
            mysqli_query($link, "insert into purchase(dt,userid,pid,bank,accno) values('$dt','$userid','$row[0]','$bank','$accno')");
        }
    mysqli_free_result($result);
    mysqli_query($link, "delete from cart where userid='$userid'");
    echo "<div class='center'>Items Purchased Successfully...!</div>";
}
include './userfooter.php';
?>