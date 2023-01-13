<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/62c817d797.js" crossorigin="anonymous"></script>
    <title>restaurant.me</title>
</head>
<body>
<header>
    <nav>
      <ul class="list-menu">
        <li class="dropdown-shop" onclick="hamburgerMenu()">
        <i class="fa-solid fa-bars-staggered"></i>
          <div class="dropdown-content-menu">
            <pre>            x</pre>
            <a href="#Home">Home</a>
            <hr>
            <a href="#Foods">Foods</a>
            <hr>
            <a href="#Drink">Drinks</a>
            <hr>
            <a href="reservation.php">Reservation</a>
            <hr>
            <a href="#contact">Contact</a>
          </div>
        </li>
      </ul>

      <div class="logo">
          <h2>Restaurant Monggo</h2>
      </div>
    </nav>
  </header>
        <main class="introduction">
            <h1>Hello, welcome to our website!</H1>
        </main>
    <div class="content1" id="Home">
        <div class="main-content1">
            <p>Home</p>
            <h1>Welcome to our website, you can find something to eat in here!</h1>
            <h2>Here we provide a wide variety of menus that you can taste. The food we have is typical food from various regions of Indonesia.
               That way you don't have to worry about tasting Indonesian food without having to travel around Indonesia. Enjoyy to our website!
            </h2>
        </div>
        <img src="kuliner.jpg " alt="">
    </div>

    <div class="content2" id="Foods">
        <h1>Foods</h1>
        <div class="row">
            <div class="column">
              <div class="card">
                <img src="padang.jpeg" alt="Avatar" style="width: 85%">
                <p>Nasi Padang</p>
                <p>Rp. 25K</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="pempek.jpg" alt="Avatar" style="width:100%">
                <p>Pempek</p>
                <p>Rp. 22K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="rawon2.jpg" alt="Avatar" style="width: 89%">
                <p>Rawon</p>
                <p>Rp. 20K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="gado.jpe" alt="Avatar" style="width:67%">
                <p>Gado - Gado</p>
                <p>Rp. 23K</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="taliwang.jpg" alt="Avatar" style="width: 100%">
                <p>Ayam Taliwang</p>
                <p>Rp. 22K</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="gudeg2.jpg" alt="Avatar" style="width:100%">
                <p>Nasi Gudeg</p>
                <p>Rp. 23K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="bangka2.jpg" alt="Avatar" style="width:86%">
                <p>Mie Bangka</p>
                <p>Rp. 21K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="pecel.jpg" alt="Avatar" style="width:100%">
                <p>Nasi Pecel</p>
                <p>Rp. 20K</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="miaceh4.jpg" alt="Avatar" style="width: 91%">
                <p>Mie Aceh</p>
                <p>Rp. 20K</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="coto.jpg" alt="Avatar" style="width:89%">
                <p>Coto Makasar</p>
                <p>Rp. 23K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="bubur.jpg" alt="Avatar" style="width:100%">
                <p>Bubur Manado</p>
                <p>Rp. 21K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="banjar.jpg" alt="Avatar" style="width:95%">
                <p>Soto Banjar</p>
                <p>Rp. 20K</p>
              </div>
            </div>
          </div>
      </div>
      

    
    <div class="Drink" id="Drink">
        <h1>Drinks</h1>
        <!-- <h3>Menu What We Have</h3> -->
        <div class="row">
            <div class="column">
              <div class="card">
                <img src="es teh.jpg" alt="Avatar" style="width:67%">
                <p>Es Teh</p>
                <p>Rp. 8K</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="es jeruk.jpg" alt="Avatar" style="width:67%">
                <p>Es Jeruk</p>
                <p>Rp. 10K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="kelapa.jpg" alt="Avatar" style="width:67%">
                <p>Es Kelapa Muda</p>
                <p>Rp. 15K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="stmj.jpg" alt="Avatar" style="width:67%">
                <p>STMJ</p>
                <p>Rp. 10K</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="wedang.jpg" alt="Avatar" style="width:67%">
                <p>Wedang Jahe</p>
                <p>Rp. 8K</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="uwuh2.jpg" alt="Avatar" style="width:75%">
                <p>Wedang Uwuh</p>
                <p>Rp. 10K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="kelapa.jpg" alt="Avatar" style="width:67%">
                <p>Es Kelapa Muda</p>
                <p>Rp. 15K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="ronde2.jpg" alt="Avatar" style="width:80%">
                <p>Wedang Ronde</p>
                <p>Rp. 10K</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="column">
              <div class="card">
                <img src="teler2.jpg" alt="Avatar" style="width:67%">
                <p>Es Teler</p>
                <p>Rp. 13K</p>
              </div>
            </div>
          
            <div class="column">
              <div class="card">
                <img src="dawet3.jpg" alt="Avatar" style="width:48%">
                <p>Es Kopyor</p>
                <p>Rp. 12K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="kopyor3.jpg" alt="Avatar" style="width:43%">
                <p>Es Kopyor</p>
                <p>Rp. 13K</p>
              </div>
            </div>
            
            <div class="column">
              <div class="card">
                <img src="gempol.jpg" alt="Avatar" style="width:45%">
                <p>Es Gempol</p>
                <p>Rp. 10K</p>
              </div>
            </div>
          </div> 
         

    <div class="contact" id="contact">
        <h1>If you have something problem with our service you can contact us don't below</h1>
        <p>Send me over a message, and <a href="https://wa.me/6281225533722">let's chat.</a></p>
    </div>

    <script src="main.js"></script>

</body>
</html>