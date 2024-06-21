<?php
include './adminheader.php';
if(!isset($_POST['submit'])) {
?>
<form name="f" action="adminhome.php" method="post" enctype="multipart/form-data">
    <table class="center_tab">
	<thead>
	    <tr>
                <th colspan="2"><h4>PRODUCT CREATION</h4></th>
	    </tr>
	</thead>
	<tbody>
	    <tr>
		<th>Select Category</th>
		<td>
		    <select name="cat" onchange="getSubCat(this.value)" required>
			<option value="">--Select--</option>
			<option value="men">Men</option>
			<option value="women">Women</option>
			<option value="kids">Kids</option>
		    </select>
		</td>
	    </tr>
            <tr>
		<th>Sub Category</th>
		<td>
		    <div id="scat">
			<select name="subcat" required>			    
			</select>
		    </div>
		</td>
	    </tr>
	    <tr>
		<th>Brand Name</th>
		<td><input type="text" name="brand" required autofocus></td>
	    </tr>
            <tr>
		<th class="vcenter">Image</th>
		<td><input type="file" name="ff" required accept="image/*"></td>
	    </tr>
            <tr>
		<th class="vcenter">Description</th>
                <td><textarea name="descr" required rows="3"></textarea></td>
	    </tr>
            <tr>
		<th>Price</th>
		<td><input type="text" name="price" required></td>
	    </tr>	    
	</tbody>
	<tfoot>
	    <tr>
		<td colspan="2" class="center">
		    <input type="submit" name="submit" value="Create Product">
		</td>
	    </tr>
	</tfoot>
    </table>
</form>
<?php
} else {
    if(is_uploaded_file($_FILES['ff']['tmp_name'])) {
    include './db.php';
    $cat = $_POST['cat'];
    $subcat = $_POST['subcat'];
    $brand = $_POST['brand'];
    $descr = $_POST['descr'];
    $price = $_POST['price'];
    $pimage = "uploads/".time().basename($_FILES['ff']['name']);
    $ftype = $_FILES['ff']['type'];
    $fsize = $_FILES['ff']['size'];
    move_uploaded_file($_FILES['ff']['tmp_name'], $pimage) or die("Cannot move Uploaded File...!");
    mysqli_query($link, "insert into products(cat,subcat,brand,descr,price,pimage,ftype,fsize) values('$cat','$subcat','$brand','$descr','$price','$pimage','$ftype','$fsize')") or die(mysqli_error($link));
    echo "<div class='center'>Product Stored Successfully...!<br><a href='adminhome.php'>Back</a></div>";
    } else {
    echo "<div class='center'>Image Not Uploaded...!<br><a href='adminhome.php'>Back</a></div>";
    }
}
include './adminfooter.php';
?>