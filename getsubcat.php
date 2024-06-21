<?php
include './db.php';
    $subcategories = array("men"=>array("Casual Shirts","Jeans","TShirts","Shorts"),
			    "women"=>array("Dresses","Churidar Suits","Kurtas","Office Wear"),
			    "kids"=>array("Baby Apparel","Girls Apparel","Boys Apparel"));
    $cat = $_GET['cat'];
    
    $subcat = $subcategories[$cat];
    $str = "<select name='subcat'>";
	foreach($subcat as $ss)
	    $str .= "<option value='$ss'>$ss</option>";
    $str .= "</select>";
    echo $str;
?>