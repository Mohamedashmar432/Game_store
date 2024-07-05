<!DOCTYPE html>
<html>
<?php
session_start();
include 'user.class.php'; 
if(isset($_POST['submit']))
{
	$user_id=$_SESSION['user_id'];
	$username=$_SESSION['user'];
	$game=$_POST['itemName'];
	$price=$_POST['price'];
	$discount=$_POST['discount'];
	$itemid=$_POST['itemId'];
	$image='assets/game images/' . $_POST['itemId'] . '.jpg';
	$payment = 1;

	$result = user::checkout($user_id,$username,$game,$itemid,$price,$discount,$image,$payment);
	if($result)
	{
		?><script>alert("payment success");</script><?php
	}else{
		?> <script>alert("payment failed");</script><?php
	}
}
else{
?>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>checkout</title>
	<link rel="stylesheet" type="text/css" href="checkout.css">
</head>

<body>
	<?php user::load('__navbar'); ?>
	<section>
		<div class="container">
			<div class="left">
				<h3>ORDER SUMMARY</h3>
				<div class="card">
					<img id="boughtItemImage" src="" alt="Bought Item">
					<div class="details">
						<div class="game-name">
							<ul class="name">
								<li>Name :</li>
								<li><span id="boughtItemName"></span></li>
							</ul>
						</div>
						<hr>
						<div class="order">
							<ul>
								<li>Price:</li>
								<li>₹<span id="boughtItemPrice"></span></li>
							</ul>
						</div>
						<div class="order">
							<ul>
								<li>Discount :</li>
								<li><span id="boughtItemDiscount"></span>%</li>
							</ul>
						</div>
						<div class="order">
							<ul>
								<li>Total :</li>
								<li>₹<span id="boughtItemTotal"></span></li>
							</ul>
						</div>
						<hr>
					</div>
				</div>
			</div>
			<div class="right">
				<h3>CHECKOUT</h3>
				<form class="checkout" method="post" action="<?PhP echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
					Accepted Cards <br>
					<img src="image/card1.png" width="100">
					<img src="image/card2.png" width="50">
					<br><br>

					Card Holder's Name
					<input type="text" name="card_holder_name" placeholder="Enter Name" required>

					Credit card number
					<input type="text" name="card_number" placeholder="Enter card number" required>

					<div id="zip">
						<label>
							Exp year
							<select name="exp_year" required>
								<option>Choose Year..</option>
								<option>2022</option>
								<option>2023</option>
								<option>2024</option>
								<option>2025</option>
							</select>
						</label>
						<label>
							CVV
							<input type="number" name="cvv" placeholder="CVV" required>
						</label>
					</div>
					<input type="hidden" name="itemName" value="<?php echo isset($_GET['itemName']) ? htmlspecialchars($_GET['itemName']) : ''; ?>">
					<input type="hidden" name="price" value="<?php echo isset($_GET['price']) ? htmlspecialchars($_GET['price']) : ''; ?>">
					<input type="hidden" name="discount" value="<?php echo isset($_GET['discount']) ? htmlspecialchars($_GET['discount']) : ''; ?>">
					<input type="hidden" name="itemId" value="<?php echo isset($_GET['itemId']) ? htmlspecialchars($_GET['itemId']) : ''; ?>">
					<input type="submit" name="submit" value="Proceed to Checkout">
					
				</form>

			</div>
		</div>
		
 </section>
<script>
    // JavaScript to handle dynamic changes
    window.onload = function() {
        // Retrieve parameters from URL
        let urlParams = new URLSearchParams(window.location.search);
        let itemName = urlParams.get('itemName');
        let price = parseFloat(urlParams.get('price'));
        let discount = parseFloat(urlParams.get('discount'));
        let itemId = urlParams.get('itemId');

        if (itemName && price && discount && itemId) {
            let boughtItemDiv = document.getElementById('boughtItem');
            let boughtItemImage = document.getElementById('boughtItemImage');
            let boughtItemName = document.getElementById('boughtItemName');
            let boughtItemPrice = document.getElementById('boughtItemPrice');
            let boughtItemDiscount = document.getElementById('boughtItemDiscount');
            let boughtItemTotal = document.getElementById('boughtItemTotal');
            
            // Calculate discounted price
            let discountedPrice = price - (price * (discount / 100));

            // Update bought item details
            boughtItemImage.src = 'assets/game images/'+itemId + '.jpg'; // Assuming the image name is same as itemId
            boughtItemImage.alt = itemId; // Optional: Set alt attribute
            boughtItemName.textContent = itemName;
            boughtItemPrice.textContent= price;
            boughtItemDiscount.textContent= discount;
            boughtItemTotal.textContent = discountedPrice.toFixed(1);

            // Display bought item
            boughtItemDiv.style.display = 'block';
        }
    }
</script>

</body>
</html>
<?php }
header('Location:library.php'); ?>
