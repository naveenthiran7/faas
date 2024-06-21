<?php
include './adminheader.php';
if(isset($_GET['did'])) {
    $id = $_GET['did'];
    mysqli_query($link, "delete from products where id=$id");
}
if(!isset($_GET['eid'])&&!isset($_POST['submit'])) {
$result = mysqli_query($link, "select id,cat,subcat,brand,descr,price,pimage from products order by cat,subcat,id");
    echo "<div id='view_prod'><table class='center_tab'><thead><tr><th>Id<th>Category<th>Sub-Cat<th>Brand<th>Descr<th>Price<th>Image<th>Task";
    echo "<tbody>";
        while($row = mysqli_fetch_row($result)) {
            echo "<tr>";
            foreach($row as $k=>$r) {
                if($k!=6)
                echo "<td>$r";
                else
                echo "<td><img src='$r' width='50px' height='55px'>";
            }
            echo "<td><a href='viewall.php?eid=$row[0]'>Edit</a>&nbsp;&nbsp;<a href='viewall.php?did=$row[0]' onclick=\"javascript:return confirm('Are You Sure to Delete Product ?')\">Del</a>";
        }
    echo "</tbody></table></div>";
mysqli_free_result($result);
} else if(!isset($_POST['submit'])) {
    $id = $_GET['eid'];
    $result = mysqli_query($link, "select cat,subcat,brand,descr,price,pimage from products where id=$id");
    $row = mysqli_fetch_row($result);
    mysqli_free_result($result);
?>
<form name="f" action="viewall.php" method="post" enctype="multipart/form-data">
    <table class="center_tab">
	<thead>
	    <tr>
                <th colspan="2"><h4>EDIT PRODUCT</h4></th>
	    </tr>
	</thead>
	<tbody>
	    <tr>
		<th>Category</th>
		<td>
                    <input type="hidden" name="hid" value="<?php echo $id?>">
                    <?php echo $row[0]?>
                </td>
	    </tr>
            <tr>
		<th>Sub Category</th>
		<td><?php echo $row[1]?></td>
	    </tr>
	    <tr>
		<th>Brand Name</th>
		<td><input type="text" name="brand" value="<?php echo $row[2]?>" required autofocus></td>
	    </tr>            
            <tr>
		<th class="vcenter">Description</th>
                <td><textarea name="descr" required rows="3"><?php echo $row[3]?></textarea></td>
	    </tr>
            <tr>
		<th>Price</th>
		<td><input type="text" name="price" value="<?php echo $row[4]?>" required></td>
	    </tr>
            <tr>
		<th class="vcenter">Image</th>
		<td><input type="file" name="ff" required accept="image/*"></td>
	    </tr>
	</tbody>
	<tfoot>
	    <tr>
		<td colspan="2" class="center">
		    <input type="submit" name="submit" value="Modify">
		</td>
	    </tr>
	</tfoot>
    </table>
</form>
<?php
} else {
    if(is_uploaded_file($_FILES['ff']['tmp_name'])) {
    include './db.php';
    $id = $_POST['hid'];
    $brand = $_POST['brand'];
    $descr = $_POST['descr'];
    $price = $_POST['price'];
    $pimage = "uploads/".time().basename($_FILES['ff']['name']);
    $ftype = $_FILES['ff']['type'];
    $fsize = $_FILES['ff']['size'];
    move_uploaded_file($_FILES['ff']['tmp_name'], $pimage) or die("Cannot move Uploaded File...!");
    mysqli_query($link, "update products set brand='$brand',descr='$descr',price=$price,pimage='$pimage',ftype='$ftype',fsize='$fsize' where id=$id") or die(mysqli_error($link));
    echo "<div class='center'>Product Modified Successfully...!<br><a href='viewall.php'>Back</a></div>";
    } else {
    echo "<div class='center'>Image Not Uploaded...!<br><a href='viewall.php'>Back</a></div>";
    }
}
include './adminfooter.php';
?>