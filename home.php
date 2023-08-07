<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap");
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        
        a {
            text-decoration: none;
        }
        
        .hero {
            width: 100%;
            height: 100vh;
            background: url(img/bg.png);
            background-size: cover;
        }
        
        nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 30px 100px;
        }
        
        .logo {
            max-height: 100px;
        }
        
        nav ul li {
            list-style: none;
            display: inline-block;
            padding: 10px 20px;
        }
        
        nav ul li a {
            color: #1d1d24;
            position: relative;
            padding: 5px 0;
        }
        
        nav ul li a:hover {
            color: #ee1b2e;
        }
        
        nav ul li a:after {
            content: "";
            position: absolute;
            left: 0;
            width: 0;
            height: 3px;
            background: #ee1b2e;
            transition: 0.3s;
            bottom: 0;
        }
        
        nav ul li a:hover:after {
            width: 100%;
        }
        
        .btn {
            color: #202020;
            font-size: 16px;
            text-transform: uppercase;
            letter-spacing: 2px;
            padding: 16px 40px;
            border-radius: 500px;
            display: inline-block;
            font-weight: 500;
            transition: all 0.4s ease-in-out;
            background-size: 152% 100%;
            background: #ee1b2e;
            border: 2px solid #ee1b2e;
        }
        
        .btn:hover {
            background: transparent;
            border-color: #ee1b2e;
            color: #ee1b2e;
        }
        
        .content {
            position: absolute;
            top: 35%;
            left: 8%;
        }
        
        .content .title {
            color: #0a0a0a;
            font-size: 15px;
            text-transform: uppercase;
            letter-spacing: 4px;
            display: inline-block;
            margin-bottom: 20px;
            background: linear-gradient( 120deg, #1c99fe 20.69%, #7644ff 50.19%, #1f1f25 79.69%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        
        .content h1 {
            color: #1f1f25;
            font-size: 75px;
            font-weight: 900;
            line-height: 90px;
            text-transform: inherit;
            width: 70%;
        }
        
        .content h1 span {
            color: #161314;
        }
        
        .content p {
            width: 55%;
            color: #202020;
            margin-top: 25px;
            margin-bottom: 30px;
        }
    </style>
    <meta charset="UTF-8" />
    <title>Ahhas Disa Motor</title>
    <!----CSS link----->
</head>

<body>
    <div class="hero">
        <nav>
            <ul>
                <li><a href="home.php">Beranda</a></li>
                <li><a href="booking_form.php">Booking</a></li>
                
            </ul>
        </nav>

        <div class="content">
            <span class="title">Ahhas Disa Motor </span>
            <h1> <span>Service Booking Online </span></h1>
            <p>
            <!-- tempat data base sama seperti home,news,tips,contact -->
            </p>
        </div>
    </div>
</body>

</html>