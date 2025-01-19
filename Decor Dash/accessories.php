<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>accesories</title>
    <link rel="stylesheet" href="decor.css">
    <style>
        .mm{
            display: inline-block;
            width: 33%;
            padding-left: 20px;
            padding-right: 20px;
        }
        .card1 {
            border: 1px solid lightgray;
            box-shadow: 2px 2px 6px 0 rgba(0, 0, 0, 0.3);
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 500px;
            
        }
        .zoom-img .img-card {
             position: absolute;
            overflow: hidden;
        }

        .img-card1 img {
            -webkit-transition: 0.8s ease;
            transition: 0.8s ease;
        }

        .card1:hover .zoom-img img {
            -webkit-transform: scale(1.1);
            transform: scale(1.1);
        }
        .cards .card-box {
             display: flex;
             flex-flow: row;
             background-color:rgba(0, 0, 36, 0.8);
             font-size: 18px;
             font-family: Roboto;
             align-items: center;
             justify-content: center;
             text-align: center;
             color: white;
        }
    </style>
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
    </section><br><br><br>
    <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif;letter-spacing: 3px;color: rgba(0, 0, 36, 0.8);">DECORATIVE ACCESSORIES</h1><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/vase.jfif" style="padding-top: 50px;padding-left: 60px;"><br>
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Decorative Lilac Glass Vase | Flower Pot For Home Decor & Living Room<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.600.00<br><br>
                <a href="vase cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/candles.jfif" style="padding-top: 20px;padding-left: 85px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Ivory Gold Plated Scented Candles Collection Set For Home & Table Decoration <br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.400.00<br><br>
                <a href="candle cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/candle stand.jfif" style="padding-top: 50px;padding-left: 70px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Decorative Hanging Butterfly Tealight Holder Gold Finish - Set Of 4<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.436.00<br><br>
                <a href="hanging cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/lantern.jfif" style="padding-top: 50px;padding-left: 60px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Tommer Wooden Hanging Lantern | Candle Holder<br>
                <span class="rating">⭐⭐⭐⭐</span><br><br>
                Rs.892.00<br><br>
                <a href="wooden hanging cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/tissue.jfif" style="padding-top: 40px;padding-left: 70px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Wooden Holder For Napkin & Tissue Paper For Dining Table Brown Color<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.598.00<br><br>
                <a href="tissuepaper cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/bowl.jfif" style="padding-top: 50px;padding-left: 70px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Silver Bowl Set |<br> Silver Finish Set Of 3<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.407.00<br><br>
                <a href="silver bowl cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
</body>
</html>