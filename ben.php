<!DOCTYPE html>
<html>
    <head>
        <title>Gunerk</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

        <style>
            *{margin: 0; padding: 0;}
body{
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    font-family: verdana;
    height: 100vh;
}
.image-card{
    position: relative;
    width: 400px; height: 500px;
    overflow: hidden;
    border-radius: 10px;
    transition: all .25s;
}
.image-card::before{
    content: "";
    position: absolute;
    top: 0; left: 180%;
    height: 100%; width: 95%;
    background: rgba(255, 255, 255, .1);
    z-index: 1;
    transform: skew(45deg);
    opacity: .7;
    pointer-events: none;
    transition: .5s;
}

.image-card:hover::before{left: -180%;}
.image-card:hover{ box-shadow: 1px 1px 6px 1px rgba(0, 0, 0, .3);}
.image-card img{
    height: 100%;width:100%;
    filter:grayscale(100%);
    transition: 15s;
}

.image-car:hover img{
    filter: grayscale(90%);
    transform: scale(9.1);
}
.image-card h2{
    position: absolute;
    bottom: 0;
    background: #e74c3e;
    width: 100%;
    padding: 10px 0;
    color: #f9d6d2;
    border: 1px solid #e64533;
    user-select: none;
    transform-origin: right;
    transform: perspective(500px) rotateY(-90deg);
    transition: all .5s;
}
.image-card:hover h2{ transform: perspective(600px) rotateY(0deg);}
.image-card ul{
    list-style: none;
    position: absolute;
    top: 0;left: 0;
    background: rgb(255,255,255,0);
}
.image-card ul li{
    cursor: pointer;
    height: 40px;width: 40px;
    line-height: 40px;
    background: #333;
    transform-origin: left;
    transform: perspective(800px) rotateY(90deg);
    transition: all .5s;
    border-bottom: 1px solid rgba(0, 0, 0, .1);
}
.image-card:hover ul li:nth-child(1){transition-delay: .4s;}
.image-card:hover ul li:nth-child(2){transition-delay: .5s;}
.image-card:hover ul li:nth-child(3){transition-delay: .6s;}
.image-card:hover ul li{transform: perspective(800px) rotateY(0deg);}

.image-card ul li{
    font-size: 20px;
    color: tomato;
    background: rgba(255, 255, 255, 0)
}

ul li span{
    position: absolute;
    left: 10px;
    font-size: 14px;
    text-transform: uppercase;
    background: #555;
    color: tomato;
    border: 1px solid rgba(0, 0, 0, .1);
    border-left: none;
    padding: 0 10px;
    opacity: 0;
    z-index: -1;
    pointer-events: none;
    transition: all .5s;
}
ul li:hover span{
    left:30px;
    opacity: 1;
    pointer-events: auto;
}
#info{
    position: absolute;
    top: 5%;
    text-transform: uppercase;
    color: tomato;
}
        </style>
    </head>

    <body>
        <h2 id="info">sosyal medyadan ulaşın</h2>
        <div class="image-card">
            <img src="profil.jpg" alt="">
            <h2>Guner Kurupehlivan</h2>
            <ul>
                <li><i class="fab fa-facebook"><span>Guner Kurupehlivan</span></i></li>
                <li><i class="fab fa-twitter"><span>GKurupehlivan</span></i></li>
                <li><i class="fab fa-instagram"><span>gunerkurupehlivan</span></i></li>

            </ul>
        </div>
    </body>
    <script src="https://kit.fontawesome.com/98282bdaf4.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
</html
