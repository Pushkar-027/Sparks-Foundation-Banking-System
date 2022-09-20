<?php include('nav.php') ?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Banking System</title>
        <meta name ="viewport"content="width=device-width ,initial-scale=1">
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Gabriela&display=swap" rel="stylesheet">
   
        <style>
*{
    margin: 0;
    padding: 0;
    font-family: sans-serif;
}
#header{
    height: 100vh;
    background-image: url(img/background.png);
    background-position: center;
    background-size: cover;
    background-repeat: none;
}
.container{
    margin-right: 100px;
    margin-left: 100px;
}
.logo{
    margin-top: 30px;
    width: 60px;
}
.header-text{
    max-width: 350px;
    margin-top: 120px;
}
.h1{
    font-size: 20px;
}
.square{
    height: 12px;
    width: 12px;
    display: inline-block;
    background: #f67c92;
    margin:15px 0;
}
.button{
    padding: 18px 40px;
    background: transparent;
    outline:none ;
    border: 2px solid #f67c92;
    font-weight: bold;
    cursor: pointer;
}
p{
    font-size: 15px;
    line-height: 18px;
    color: #777;
}
.header-text button{
    margin-top: 20px;
    margin-bottom: 60px;
}
.line1{
    width: 15px;
    height: 15px;
    background: #f67c92;
    display: inline-block;
}
.line2{
    width: 80px;
    height: 1px;
    background: #f67c92;
    display: inline-block;
}
.line3{
    width: 60px;
    height: 1px;
    background: #f67c92;
    display: inline-block;
}
.line{
    line-height: 8px;
}

#menuBtn{
    width: 50px;
    position: fixed;
    right: 65px;
    top: 35px;
    z-index: 2;
    cursor: pointer;
}

.logoParent{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 200px;
}

.titlesss{
    margin-bottom: -5px;
    margin-left: 20px;
    font-family: 'Gabriela', serif;
    font-size: 27px;
}

/* FEATURES */

#features{
    padding-top: 50px;
    padding-bottom: 50px;
    margin-top: 100px;
}

.feature-row{
    width: 80%;
    margin: auto;
    display: flex;
    align-items: center;
    justify-content: space-around;
    flex-wrap: wrap;
}
.feature-col{
   display: flex;
   flex-direction: column;
   justify-content: space-between;
   height: 300px;
}
.feature-col img{
    width: 200px;
}

.feature-col>a{
    display: inline-block;
}


@media(max-width:450px){
    .container{
        margin-right: 20px;
        margin-left: 20px;
    }
    
    #header{
        min-height: 100vh;
        background-image: none;
        /* background-size: 100%;
        background-repeat: no-repeat; */
    }
    
    
    .header-text{
        margin-top: 20px;
    }

    #menuBtn{
        right: 20px;
    }

    #features{
        margin-top: -20px;
    }

    .button {
        margin-top: 10px;
        margin-bottom: 10px;
    }
}


@media(max-width:1000px){
    #header{
        background-image: none;
        /* background-size: 100%;
        background-repeat: no-repeat; */
    }
    
}
    </style>
    </head>
    <body>
        <section id="header">
            <div class="container">
                <div class="logoParent">
                    <div><img src="img/bank-building.png" class="logo"></div>
                    <div class="titlesss" ><h1>Sparks Bank</h1></div>
                </div>
                <div class="header-text">
                <h2>Get the access of your account</br>now in the comfort of your home</h2>
                
                    <div class="line">
                        <span class="line1"></span><br><br>
                        <span class="line2"></span><br><br>
                        <span class="line3"></span>
                    </div>
                    <br>
                    <h5>No more waiting in the long queues ,transfer the money very conveniently with the help of our Sparks Bank System ,
                         a digital wallet platform and online payment system developed  to power in-app, online, 
                        and in-person contactless  transactions with mobile phones.</h5>
                    
                    <div class="line">
                        <span class="line1"></span><br><br>
                        <span class="line2"></span><br><br>
                        <span class="line3"></span>
                    </div>
                </div>
            </div>
        </section>

<!---FEATURES--->
<section id="features">
    <div class="feature-row">
        <div class="feature-col">
        <img src="img/customers.png" class="img-fluid1" >
        <a href="transfer_money.php"><button class="btn" id="red">View Users</button></a>
        </div>

        <div class="feature-col">
        <img src="img/transferMoney.png" class="img-fluid2">
          <a href="transfer_money.php"><button class="btn" id="blue">Transfer Money</button></a>
        </div>

        <div class="feature-col">
        <img src="img/3.png" class="img-fluid3">
        <a href="transactionhistory.php"><button class="btn" id="green">View Transfer History</button></a>
        </div>
    </div>
    
</section>

<div>
<?php include('footer.php') ?>
</div>
</body>
</html>