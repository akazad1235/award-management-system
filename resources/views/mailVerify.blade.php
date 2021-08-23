<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
            background-color: #ddd;
            margin: 0px;
            padding: 0px;

        }
        .container{
            margin: auto;
            width: 50%;
            text-align: center;
        }
        .header{

        }
        .logo{
            width: 100%;
            height: 120px;
            background-color: #0b2e13;
            margin: 0px;
            padding: 0px;
            border-radius:5px 5px 0px 0px ;

        }
        .center img{
            width: 120px;
            margin: 0px;
            padding: 0px;

        }
        .button button{
            background-color: #FFB200;
            height: 35px;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 4px;
            margin-bottom: 10px;
            font-size: 15px ;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .content{
            background-color: white;
            padding: 1px;
            border-radius:0px 0px 5px 5px;
        }
        .content p{
            padding: 0px 10px
        }
        .social-icon img{
            width: 35px;
            margin: 5px;
        }
        h2{
            color:green
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h2>Welcome to Women & Ecommerce</h2>
    </div>
    <div class="logo">
        <div class="center">
            <img src="https://i.pinimg.com/originals/8f/c3/7b/8fc37b74b608a622588fbaa361485f32.png" alt="">
        </div>
    </div>
    <div class="content">
        <h2 class="text-success">Congratulations</h2>
        <p>Hello <strong>{{$name}}</strong>,Thank you registration to<strong> Women & Ecommerce </strong>.</p>
        <div class="button">
           <button> <a target="_blank" href="https://admin-demo.azadhosen.com/">Please Visit Our Website</a></button>
        </div>

    </div>
    <div class="social">
        <h4>Stay in Touch</h4>
        <div class="social-icon">
            <img src="https://cdn.iconscout.com/icon/free/png-256/facebook-logo-2019-1597680-1350125.png" alt="">
            <img src="https://www.pngfind.com/pngs/m/57-571935_linkedin-icon-vector-png-linkedin-circle-logo-transparent.png" alt="">
            <img src="https://www.vhv.rs/dpng/d/409-4097837_transparent-background-twitter-logo-hd-png-download.png" alt="">
        </div>
        <p>Email sent by Women & Ecommerce</p>
    </div>
</div>
</body>
</html>
