<html>
    <head>
        <title> Farmer's Portal </title>
        <style>
            body{
                background-color: black;
                font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            }
            h1{
                margin : 0;
            }

            .title{
                position: relative;
                left: 20px;
                top: -100px;
                font-family: fantasy;
                font-size: 80;
            }

            .button{
                position: relative;
                top: 10px;
            }

            .data{
                font-size:20px;
                padding-right:62px;
                padding-left:62px;
            }

            .logo{
                position: relative;
                left: -400;
                top: 10px;
            }

            #container{
                background-color: white;
                width: 1000px;
                height: 2000px;
                margin-left: auto;
                margin-right: auto;
                color: black;
            }
            #header {
                background: #66ff99;
                color: black;
                text-align: center;
            }

            ul{
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
                position: relative;
                bottom: 47px;
            }
            li {
                float: left;
                border-right: 1px solid #bbb;
            }
            
            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }

            .active {
                background-color: #4CAF50;
            }

            .actives{
                border-left: 1px solid white;
                background-color: #ff944d;
            }


            li:last-child {
                border-right: none;
            }

            #footer{
                clear : both;
                padding: 20px;
                background-color: powderblue;
                text-align: center;
                color: black;
            }
        </style>

    </head>
    <body>
        <div id="container">
                <div id="header">
                    <img width="150" class="logo" src = "https://www.pngarts.com/files/3/Farmer-PNG-Transparent-Image.png" alt= "Farmer" />
                    <h1 class="title">  FARMER'S PORTAL  </h1 class="title">
                </div>
                <div id="content">
                    <ul>
                        <li><a class="active" href="Home.php">Home</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="about.php">About</a></li>
                        <li style="float:right"><a class="actives" href="./merchant/Merchant_login.php">Merchant Login</a></li>
                        <li style="float:right"><a class="actives" href="./farmer/Farmer_login.php">Farmer Login</a></li>
                      </ul>
                    <div class = "data">
                    <h1>About</h1><br>
                    The main objective of this portal is to connect farmers and buyers. 
                    This helps the farmers in selling their produce at a better rate. No additional cost spent on marketing and delivery of goods. 
                    They can choose to charge more by delivering the items themselves. When they get a good harvest, middle way people, so-called as brokers treat them innocent. 
                    They buy their produce at a very low rate and sell them high in the market. This has been a problem for many years and still going on. This portal helps very much in avoiding this. Farmers get an opportunity to sell their produce on their own.
                     When the buyers buy from the farmers, restaurant owners, delivery agencies and vegetable vendors are benefitted. This helps the farmers sell at better rates and make them live with pride and make additional income.
               <div id="footer">
                   Copyright &copy; Farmer's Portal.  
               </div>
        </div>
</body>
</html>