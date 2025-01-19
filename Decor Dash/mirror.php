<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mirror</title>
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
    <h1 style="text-align: center; font-family: 'Times New Roman', Times, serif;letter-spacing: 6px;color: rgba(0, 0, 36, 0.8);">MIRRORS</h1><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/round mirror.jfif" style="padding-top: 30px;padding-left: 60px;"><br>
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">Round Wall
                Mirror For Living Room |<br> Wooden Frame Mirror For Home<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.5,076.00<br><br>
                <a href="round wall cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/full length.jfif" style="padding-top: 30px;padding-left: 60px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Full Length Rectangular Floor Mirror | Wooden Frame Standing Mirror For Home <br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.7,995.00<br><br>
                <a href="full mirror cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/golden bordered.jfif" style="padding-top: 30px;padding-left: 70px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Golden Bordered Minimalist Round Wall Mirror | 33 Inches Decorative Mirror<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.5,770.00<br><br>
                <a href="golden mirror cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/vintagebrown.jfif" style="padding-top: 30px;padding-left: 75px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Vintage Brown Aluminium Wall Mirror | Decorative Antique Hanging Mirror <br>
                <span class="rating">⭐⭐⭐⭐</span><br><br>
                Rs.1,770.00<br><br>
                <a href="vintage mirror cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/mirrors.jfif" style="padding-top: 30px;padding-left: 60px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Golden Metal Framed Full Length Rectangular | Standing Mirror For Home<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.2,770.00<br><br>
                <a href="golden metal cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div>
    <div class="colum mm">
        <div class="card1">
            <div class="zoom-img">
                <img src="decor images/titan golden.jfif" style="padding-top: 30px;padding-left: 60px;">
            </div>
            <p style="font-family: 'Times New Roman', Times, serif; font-size: 18px;text-align: center;padding-left: 15px;padding-right: 15px;">
                Titan Golden Round Wall Mirror | Small Mirror For Wall Decor & Home<br>
                <span class="rating">⭐⭐⭐⭐⭐</span><br><br>
                Rs.9,407.00<br><br>
                <a href="titan cart.php" class="book">Add to Cart</a>
            </p>
        </div>
    </div><br><br><br><br><br>
   
    
   
</body>
</html>