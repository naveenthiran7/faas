<?php
include './userheader.php';
echo "<div id='l_aligned'>";
$subcategories = array("men"=>array("Casual Shirts","Jeans","TShirts","Shorts"),
			    "women"=>array("Dresses","Churidar Suits","Kurtas","Office Wear"),
			    "kids"=>array("Baby Apparel","Girls Apparel","Boys Apparel"));
echo "<ul class='item_main'>";
foreach($subcategories as $key=>$sg) {    
        echo "<li>".ucfirst($key)."</li>";
        echo "<ul class='item_sub'>";
            foreach($sg as $v) {
                echo "<li><a href='userhome.php?dcat&catname=$key&catval=$v'>$v</a></li>";
            }
        echo "</ul>";    
}
echo "</ul>";
echo "</div>";
echo "<div id='r_aligned'>";
if(isset($_GET['addcart'])) {
    $pid = $_GET['pid'];
    $userid = $_SESSION['userid'];
    mysqli_query($link, "insert into cart(userid,pid) values('$userid','$pid')");
    header("Location:userhome.php");
}
if(isset($_GET['dcat'])) {
    $catname = $_GET['catname'];
    $catval = $_GET['catval'];
    $result = mysqli_query($link, "select id,pimage,brand,price,descr from products where cat='$catname' and subcat='$catval'");
} else {
    $result = mysqli_query($link, "select id,pimage,brand,price,descr from products where cat='men' and subcat='Casual Shirts'");
}
    if(mysqli_num_rows($result)>0) {
        $i=0;
        echo "<table class='display_product'>";
        while($row = mysqli_fetch_row($result)) {
            if($i==0||$i%3==0)
                echo "<tr>";
            echo "<td style='padding:20px 0px;'>";
            echo "<table class='single_product'>";
            echo "<tbody><tr><th colspan='2' class='bold'>Product Id : $row[0]";
            echo "<tr><th colspan='2'><img class='prod_img' src='$row[1]'>";
            echo "<tr><th width='50%' class='align_right bold'>Brand<td>$row[2]";
            echo "<tr><th class='align_right bold'>Price<td>Rs.$row[3]/-";
            echo "<tr><th colspan='2' style='padding:6px 0px;'><a class='button' href='userhome.php?addcart&pid=$row[0]' onclick=\"javascript:return confirm('Are You Sure to Add this Item to Cart ?')\">Add to Cart</a>";
            echo "</tbody></table></td>";
            $i++;
        }
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "<div class='center'>Items Yet to arrive for this Category...!</div>";
    }
echo "</div>";
include './userfooter.php';
?>