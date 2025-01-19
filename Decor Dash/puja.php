<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>puja</title>
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
    <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif;letter-spacing: 4px;color: rgba(0, 0, 36, 0.8);">PUJA ESSENTIALS</h1><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/puja 1.jfif" style="padding-top: 40px;padding-left: 60px;"><br>
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Ajmeri Brass Fumer With Tong | Golden Dhoop Daan For Pooja & Home<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.1,530.00<br><br>
                <a href="ajmeri cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/puja 2.jfif" style="padding-top: 40px;padding-left: 60px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Elephant Round Transparent Glass Jar Set Of 2 For Kitchenware And Gift Item<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.2,198.00<br><br>
                <a href="elephant cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/puja.jfif" style="padding-top: 30px;padding-left: 90px;height: 280px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Silver Round | Dhoop Dhaan For Pooja Room<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.1,770.00<br><br>
                <a href="silver round cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/puja 4.jfif" style="padding-top: 40px;padding-left: 55px;height: 270px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Brass Round Lobaan Dhoop Daan For Pooja Room | Puja Essentials For Home <br>
                <span class="rating">⭐⭐⭐⭐</span><br><br>
                Rs.775.00<br><br>
                <a href="brass cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/puja 6.jfif" style="padding-top: 30px;padding-left: 75px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                White Marble Adorn Puja Platter | Decorative Serveware Tray For Home & Kitchenware<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.1,000.00 - Rs.2,870.00<br><br>
                <a href="white cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/puja 5.jfif" style="padding-top: 40px;padding-left: 70px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Hamza Incense Stick Holder<br><br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.1,814.00<br><br>
                <a href="stick cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
</body>
</html>