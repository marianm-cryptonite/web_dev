<!DOCTYPE html>
<html lang="en">
<head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap');

.containers{
    display: flex;
    align-items: center;
    justify-content: center;
    height: 600px;
    background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 43%, rgba(252,176,69,1) 99%);

}


.imgbox img{
    width:100px;
    height:100px;
    border-radius: 50%;
    object-fit: cover;

}

.imgbox{
    text-align: center;
}

.carousel-control{
    background: transparent!important;
}

.glyphicon {
    color:black
}


.carousel{
    background: white;
    padding: 30px;
    width: 50%;
    height: 340px;
    border-radius: 20px;
    box-shadow: 1px 1px 30px #b1aeae;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
}


.carousel-caption p{ 
    color:black!important;
    text-shadow: none;
    font-family: 'Roboto', sans-serif;
    padding:0 80px!important
}
 

.carousel-caption h3{ 
    color:black!important;
    text-shadow: none;
    font-family: 'Oswald', sans-serif;
}


.carousel-caption{
    position: relative!important;  
  right: 0%!important;  
    bottom: 0px!important;  
  left: 0%!important;
    
}

.carousel-indicators{
    bottom: -4px;
}

.carousel-indicators li{
    width: 50px;
    background:rgba(253,29,29,1)
}


.carousel-indicators li.active{
    width: 50px;
    background:rgba(252,176,69,1)
}



</style>
  <title>Tesmonial</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="containers">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
      
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
		
          <div class="item active">
                <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s"  >
                        <img src="aiya.png" alt="Los Angeles">
                </div>
                    <div class="carousel-caption  animate__animated animate__bounceInLeft animate__delay-3s" >
                    <h3>Baroy</h3> 
                    <p>mars website very fast response and helpful service!</p>
                    </div>
          </div>
      
          <div class="item">
            <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s">
                <img src="aiya.png" alt="Los Angeles">
        </div>
            <div class="carousel-caption  animate__animated animate__bounceInLeft animate__delay-3s">
            <h3>Pelias</h3> 
            <p>Mars company is essential to those people like me who's unprivelage in life, it help me most when i'm in needs either emergency fees or in everyday budgets for my family, we sometimes have a shortage in a month. 
			Whenever i'm short in money mars company save my family and it is good because mars company has a low interest and can  afford by someone who has same living status, by having a small amount of payment in everyday, However they also give benefits to those people indepted to Mars company, and all their stuff is approachable and kind they really assist you for real.</p>

            </div>
          </div>
      
          <div class="item">
            <div class="imgbox animate__animated animate__bounceInRight animate__delay-2s">
                <img src="https://picsum.photos/1600/500?random=3" alt="Los Angeles">
        </div>
            <div class="carousel-caption  animate__animated animate__bounceInLeft animate__delay-3s">
            <h3>Diocton</h3> 
            <p>mars offers online personal loans with consumer-friendly features for good- and excellent-credit borrowers.</p>

            </div>
          </div>
        </div>
      
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      
    </div>





      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
