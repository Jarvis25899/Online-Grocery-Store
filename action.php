<?php
session_start();
include 'connection.php';
if(isset($_POST['category'])){
	echo "
		<div class='collapse navbar-collapse' id='bs-megadropdown-tabs'>
                    <ul class='nav navbar-nav nav_1'>
	";
	$query="SELECT * FROM categorie_info";
	$info=$db->query($query);
	if($info->num_rows){
		$rows=$info->fetch_all(MYSQLI_ASSOC);
	}
	foreach ($rows as $r) {
		$cat_id=$r['cat_id'];
		$cat_title=$r['cat_title'];
        $cat_file=$r['file_name'].'.php';
		echo "
			<li><a href='$cat_file' class='category' cid='$cat_id'>$cat_title</a></li>
		";
	}
	echo "
    </ul>
    </div>
    ";
}
if(isset($_POST['cart']) || isset($_POST['update_item'])){
    if(isset($_SESSION["uid"])){
    $user_id=$_SESSION['uid'];
    $pid=$_POST['p_id'];
    $query="SELECT * FROM cart_info WHERE p_id=$pid AND user_id=$user_id";
    $info=$db->query($query);
    $r=$info->fetch_assoc();
    $qty=$r['qty'];
    $pro_price=$r['price'];
    $count=$info->num_rows;
    if($count>0){
        if(isset($_POST['minus'])){
            $updated_qty=$qty-1;
            $updated_price=$pro_price*$updated_qty;
        }
        else{
            $updated_qty=$qty+1;
            $updated_price=$pro_price*$updated_qty;
        }
        $query="UPDATE cart_info SET qty=$updated_qty,total_amount=$updated_price WHERE p_id=$pid AND user_id=$user_id";
        $info=$db->query($query);
        echo "product updated";
    }
    else{
        echo "product added";
        $query="SELECT * FROM product_info WHERE product_id=$pid";
        $info=$db->query($query);
        if($info->num_rows){
            $r=$info->fetch_assoc();
        }
            $pro_name=$r['product_title'];
            $pro_price=$r['product_price'];
            $pro_image=$r['product_image'];
            $query="INSERT INTO `cart_info`(`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES (NULL,'$pid','0','$user_id','$pro_name','$pro_image','1','$pro_price','$pro_price')";
            $info=$db->query($query);
    }
}
else{
    echo "Login First";
    }
}

if(isset($_POST['minicart_add'])){
    if(isset($_SESSION["uid"])){
    $user_id=$_SESSION['uid'];
    $p_title=$_POST['pro_title'];
    $quantity=$_POST['pro_qty'];
    $input=$_POST['pro_price'];
    $price=floatval(ltrim($input, '$'));
    $query="UPDATE cart_info SET qty=$quantity,total_amount=$price WHERE product_title='$p_title' AND user_id=$user_id";
    if ($db->query($query) === TRUE) {
    echo "Record updated successfully";
    } else {
    echo "Error updating record: " . $db->error;
    }
}
    else{
       echo "Login First"; 
    }
}

if(isset($_POST['minicart_remove'])){
    if(isset($_SESSION['uid'])){
    $user_id=$_SESSION['uid'];
    $p_title=$_POST['pro_title'];
    $query="DELETE FROM cart_info WHERE product_title='$p_title' AND user_id=$user_id";
    if ($db->query($query) === TRUE) {
    echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }
}
    else{
        echo "Login First";
    }
}
if(isset($_POST['no_login'])){
    echo "Login First";
}

if(isset($_POST['get_cart_item']) || isset($_POST['get_mini_item'])){
    $user_id=$_SESSION['uid'];
    $query="SELECT * FROM cart_info WHERE user_id=$user_id";
    $info=$db->query($query);
    if($info->num_rows){
        $rows=$info->fetch_all(MYSQLI_ASSOC);
    }
    if(isset($_POST['get_cart_item'])){
    echo "
        <table class='timetable_sub'>
                    <thead>
                        <tr>
                            <th>SL No.</th> 
                            <th>Product</th>
                            <th>Quality</th>
                            <th>Product Name</th>
                            <th>Total Price</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody>
    ";
    $count=1;
    foreach ($rows as $r) {
        $product_id=$r['p_id'];
        $product_title=$r['product_title'];
        $product_image=$r['product_image'];
        $qty=$r['qty'];
        $pro_price=$r['price'];
        $total_amount=$r['total_amount'];
        echo"
            <tr class='rem1'>
                        <td class='invert'>$count</td>
                        <td class='invert-image'><a href='single.php'><img src='images/$product_image' alt=' ' class='img-responsive'></a></td>
                        <td class='invert'>
                             <div class='quantity'> 
                                <div class='quantity-select'>                           
                                    <div class='entry value-minus' id='cart_mini_minus' pid='$product_id'>&nbsp;</div>
                                    <div class='entry value'><span>$qty</span></div>
                                    <div class='entry value-plus active' id='cart_mini_plus' pid='$product_id'>&nbsp;</div>
                                </div>
                            </div>
                        </td>
                        <td class='invert'>$product_title</td>
                        
                        <td class='invert'>$$total_amount</td>
                        <td class='invert'>
                            <div class='rem'>
                                <div class='close1' id='cart_mini_remove' pid='$product_id'> </div>
                            </div>

                        </td>
                    </tr>
        ";
        $count++;
    }
    echo "
    </tbody>
            </table>
";
    }
    if(isset($_POST['get_mini_item'])){
        $sum=0;
        echo "<h4>Continue to basket</h4>
                    <ul>";
        foreach ($rows as $r) {
                $product_title=$r['product_title'];
                $qty=$r['qty'];
                $pro_price=$r['price'];
                $total_amount=$r['total_amount'];
            echo "

                <li>$product_title<span>$$pro_price </span></li>
                        
            ";
            $sum=$sum+$total_amount;
        }
            echo "
                <li>Total<span>$$sum</span></li>
                    </ul>
            ";
    }
}

if(isset($_POST['remove_item'])){
    if(isset($_SESSION['uid'])){
    $user_id=$_SESSION['uid'];
    $p_id=$_POST['p_id'];
    $query="DELETE FROM cart_info WHERE p_id='$p_id' AND user_id=$user_id";
    if ($db->query($query) === TRUE) {
    echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $db->error;
    }
}
}

if(isset($_POST['payment'])){
        $uid=$_SESSION['uid'];
        echo'
            <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="business" value="patelsam51@gmail.com">
                  <input type="hidden" name="upload" value="1">
            ';
            $x=0;
            $query="SELECT * from cart_info WHERE user_id=$uid";
            $info=$db->query($query);
            if($info->num_rows){
                    $rows=$info->fetch_all(MYSQLI_ASSOC);
            }
            $count=$info->num_rows;
            if($count>0){
                foreach ($rows as $r){
                  $x++;
                  echo'
                      <input type="hidden" name="item_name_'.$x.'" value="'.$r['product_title'].'">
                      <input type="hidden" name="item_number_'.$x.'" value="'.$x.'">
                      <input type="hidden" name="amount_'.$x.'" value="'.$r['total_amount'].'">
                      <input type="hidden" name="quantity_'.$x.'" value="'.$r['qty'].'">';
                      }
                     echo' 
                        <input type="image" name="submit"
                        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
                        alt="PayPal - The safer, easier way to pay online">
                            </form>
                        ';
                
            }       

    }
?>