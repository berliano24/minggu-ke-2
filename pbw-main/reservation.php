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
        
      <div class="logo">
        <a href="index.php">Restaurant Monggo</a>
      </div>
    </nav>
  </header>

<div class="baris">
    <div class="kolom">
        <h2 style="color:white" >Reservation<h2>
        <div class="formulir">
            <form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">
                <label style="color:white">Name</label>
                <input type="text" name="fname" placeholder="Your Name...">
                <label style="color:white">Email</label>
                <input type="text" name="femail" placeholder="Email...">
                <label style="color:white">Person</label>
                <select id="person" name="person">
                    <option value="2-4person">2-4person</option>
                    <option value="4-8person">4-8person</option>
                    <option value="etc">etc</option>    
                </select>

                <label style="color:white">Message</label><br>
                <textarea name="fmessage">
                </textarea>
                <input type="submit" value="submit">
            </form>
        </div>
        <div>
        <?php
            if (isset ($_POST['fname'])){
                $nama=$_POST['fname'];
                $email=$_POST['femail'];
                $person=$_POST['person'];
                $pesan=$_POST['fmessage'];
                
                echo "Reservation List";
                echo "<table id='tamu'";
                echo "<tr><th>No</th><th>Nama</th><th>Email></th><th>Person</th><th>Pesan</th><tr>";
                echo "<tr><th>1.</th><th>$nama</th><th>$email</th><th>$person</th><th>$pesan</th><tr>"; 
                
            }
        ?>
        </div>
    </div>
</div>

<script src="main.js"></script>
</body>
</html>