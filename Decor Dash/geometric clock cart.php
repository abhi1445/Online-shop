<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ass cart</title>
    <link rel="stylesheet" href="decor.css">
    <link rel="stylesheet" href="login.css">
   
</head>
<body>
    <section class="nav-bar">
        <div class="logo">Decor Dash</div>
        <ul class="menu">
            <li><a href="decor.php">home</a></li>
            <li><a href="login.php">login</a></li>
            <li><a href="about us.php">about us</a></li>
            <li><a href="contact.php">contact us</a></li>
        </ul>
        </div>
    </section>
    <div class="banner">
        <div class="wrapper">
           <div class="title">
              Cart
           </div>
           <form action="#" style="color: white;font-size: 20px;">
            <h3>Round Wall Geometric Metal Black Clock</h3><br>
            <div class="price">
              <p>Price Per Clock : Rs. <span class="ticket_price">3590</span></p><br>
              <p>Subtotal : <b>Rs. <span class="total">3590</span></b></p>
            </div><br>
            <div class="quantity" style="font-size: 20px;">
              <span>Quantity : </span>
              <input type="number" class="num" oninput="calc(0)" min="1" max="1000" value="1" style="font-size: 20px;"/>
              
            </div><br><br>
            <button style="border-radius: 5px; font-size: 25px;color: black;padding-left: 5px; padding-right: 5px;
            padding-top: 5px;padding-bottom: 5px;" class="btn"><a href="orderplaced.php" style="color:black;">Buy Now</a></button>
            </div>
           
           </form>
        </div>
      </div>
            

</body>
</html>


<script>
    function calc(n) {
    var price = document.getElementsByClassName("ticket_price")[n].innerHTML;
    var noTickets = document.getElementsByClassName("num")[n].value;
    var total = parseFloat(price) * noTickets;
    if (!isNaN(total))
      document.getElementsByClassName("total")[n].innerHTML = total;
  }
</script>