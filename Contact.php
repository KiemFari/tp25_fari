<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=
Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
  integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <title>ORPHELINAT</title>
</head>
<body>
<?php include ("menu.php") ?> 
    <!-- <section class="headerr">
     <header1>
    
         <nav>
              <a href="index.php"><img class="imge" src="./logo-python (1).svg" alt=""></a>

            <div class="nav-links" id="navLinks">
                <div class="fart">
                <i class="fa fa-times"  ></i></div>
            <ul>
              <a href="index.php"><li>HOME</li></a>
                <a href="About.php"><li>ABOUT</li></a>
                <a href="./Course.php"><li>NOS SERVICES</li></a>
               <a href="./Blog.php"> <li>BLOG</li></a>
               <a href="./Contact.php"><li>CONTACT</li></a>
            </ul>
        </div>
        <div class="fart">
        <i class="fa fa-bars"></i></div>
        </nav> 
    </header1>  -->
    <section class="conta">
    <div class="">
    <div class="input-group">
  <span class="input-group-text">Nom et Prenom</span>
  <input type="text" aria-label="First name" class="form-control">
  <input type="text" aria-label="Last name" class="form-control">
</div><br><br>
<div class="input-group">
  <span class="input-group-text">Email et Telephone</span>
  <input type="email" aria-label="Email" class="form-control">
  <input type="number" aria-label="telephone" class="form-control">
</div><br><br>
<div class="input-group">
  <span class="input-group-text">Address* et Code Postal</span>
  <input type="text" aria-label="Address" class="form-control">
  <input type="text" aria-label="Code postal" class="form-control">
</div>
</div><br><br>
<div>
<div class="input-group">
  <span class="input-group-text">Ville* et Pays*</span>
  <input type="text" aria-label="Ville" class="form-control">
  <input type="text" aria-label="Pays" class="form-control">
</div>
</div><br><br>
<div class="input-group">
  <span class="input-group-text">Votre message</span>
  <input type="text" aria-label="votre message" class="form-control">
</div><br><br><br>
<button class="but">Envoyer</button>
    </section>
    <?php include ("footer.php") ?> 
    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>