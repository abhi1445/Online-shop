<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clock</title>
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
    <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif;letter-spacing: 3px;color: rgba(0, 0, 36, 0.8);">CLOCKS</h1><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/clock 1.jfif" style="padding-top: 50px;padding-left: 60px;height: 270px;"><br>
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">Round Wall
                Geometric Metal Black and Golden Wall Clock | 30 Inch Big Wall Clock<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.3,590.00<br><br>
                <a href="geometric clock cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/clock 2.jfif" style="padding-top: 40px;padding-left: 75px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Chrono Aluminium Decorative Golden Table Clock For Home & Office Desk <br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.1,689.00<br><br>
                <a href="table clock cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/clock 3.jfif" style="padding-top: 40px;padding-left: 80px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Round Wall Clock For Living Room Office Kitchen And Home | 30 Inch Golden <br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.2,949.00<br><br>
                <a href="round clock cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/clock.jfif" style="padding-top: 30px;padding-left: 75px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Decorative Roman Table Clock <br>
                <span class="rating">⭐⭐⭐⭐</span><br><br>
                Rs.1,770.00<br><br>
                <a href="roman clock cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/clock 5.jfif" style="padding-top: 30px;padding-left: 78px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Black Metal Round Clock Decor<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.2,949.00<br><br>
                <a href="metal clock cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/clock 6.jfif" style="padding-top: 30px;padding-left: 78px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Antique Black Metal Modern Sitting Man Table Clock For Living Room & Decor<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.2,488.00<br><br>
                <a href="antique clock cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
   
</body>
</html>