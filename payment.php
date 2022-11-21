<?php include 'inc/header.php' ?>
<?php
$login = Session::get("cuslogin");
if ($login == false) {
    header("Location: login.php");
}
?>
<style>
.payment{
    width: 500px;
    min-height: 250px;
    text-align: center;
    border: 2px solid #ddd;
    margin: 0 auto;
    padding: 50px;
}
.payment h2{
    border-bottom: 2px solid #ddd;
    margin-bottom: 80px;
    padding-bottom: 10px;
}
.payment a{
    background: #ff0000 none repeat scroll 0 0;
    border-radius: 3px;
    color: #fff;
    font-size: 25px;
    padding: 5px 30px;
}
.back a{
    width: 160px;
    margin: 5px auto 0;
    padding: 7px 0px;
    text-align: center;
    display: block;
    background: #555;
    border: 1px solid #333;
    border-radius: 3px;
    color: #fff;
    font-size: 25px;
}
</style>
<div class="main">
    <div class="content">
        <div class="section group">
            <div class="payment">
                <h2>Choose payment option</h2>
                <a href="paymentoffline.php">Offline Payment</a>
                <a href="paymentonline.php">Online Payment</a>
            </div>
            <div class="back">
                <a href="cart.php">Back to cart</a>
            </div>
        </div>
    </div>
</div>

<?php include 'inc/footer.php' ?>