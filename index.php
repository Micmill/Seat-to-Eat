<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Link css page -->
    <link rel="stylesheet" type="text/css" href="">
    <!-- Footawesome icons link  -->
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Index</title>

    <style type="text/css">
        .top-right{
          position: absolute;
          top: 6%;
          padding-left: 78%;
       
        }

        .top-left {
          position: absolute;
          top: 35%;
          left: 16px;
          font-size: 68px;
       }
       .gauche{
         position: absolute;
          top: 2%;
          left: 16px;
          font-size: 68px;
       }

       .divider{
            width: 100%;
            padding-top: 2px;
            background-color: gray;
            display: inline-block;
         }

         a{
          text-decoration: none;
          color: black;
         }

         #button1{
          background-color: black;
          color: white;
          font-size: 30px;
         }

         #button2{
          background-color: beige;
          color: black;
          font-size: 30px;
         }
        


    </style>
</head>

<body>
  <div class="nav">
    <img src="images/sushi.jpg" width="100%">
    <div class="top-right">
      <div class="row">
        <div class="col-sm-6 text-end">
          <li>
            <a href="login.php">
              <button id="button1" type="submit" class="btn">CONNECTION</button>
            </a>
          </li>
        </div>
        <div class="col-sm-6 text-end">
          <li>
            <a href="signup.php">
              <button id="button2" type="submit" class="btn">S'INSCRIRE</button>
            </a>
          </li>
        </div>
      </div>
    </div>
    <div class="gauche">
      <p>SEAT TO EAT</p>
    </div>
    <div class="top-left">
      <p class="fw-bold">Entrez votre localisation</p>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Commande</button>
      </form>
    </div>
  </div>

  <div class="container-fluid" style="padding-top: 6%">
    <p class="text-center fs-1 fw-bold">MENUS</p>
    <div class="row g-3">
      <div class="col-sm-4">
        <div class="card">
          <img src="images/Sandwich.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/burgers.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/macaronni.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/spaghetti.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/shawarma.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/tacos.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/milkshakes.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/coffee.jpg">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/coca.jpg">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid" style="padding-top: 6%">
    <p class="text-center fs-1 fw-bold">EXPLORER SEAT TO EAT</p>
    <div class="row ">
      <div class="col-sm-4">
        <div class="card">
          <img src="images/deliver.jpg">
        </div>
        <p class="fs-3 fw-bold">Vos plats préférés ,directement à votre porte.</p>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/cooking.jpg">
        </div>
        <p class="fs-3 fw-bold">Des cuisiniers de qualité pour des bons repas.</p>
      </div>
      <div class="col-sm-4">
        <div class="card">
          <img src="images/feedCustomers.jpg">
        </div>
        <p class="fs-3 fw-bold">Dégustez les plats de chez nous.</p>
      </div>
    </div>
  </div>

  <section id="about"  style="padding-top: 5%">
    <div class="container-fluid">
      <p class="text-center fs-1 fw-bold">A PROPOS DE SEAT TO EAT</p>
      <p class="text-center fs-3">
        Restaurant Americain situé à Tunis offrant des plats et fastfood de qualité. Fonctionnement des sites et des applications SEAT TO EAt Politique de confidentialité conditions tarifs ne pas vendre mes données(Californie). Ce site est protégé par RECAPTCHA. Par ailleurs, la Politique de confidentialité et les Conditions d'utilisation de Google s'appliquent.
      </p>
    </div>
  </section>

 

  <section id="pays">
    <div class="container-fluid" style="padding-top: 5%">
    <p class="text-start fs-1 fw-bold">PAYS AVEC SEAT TO EAT</p>
    <div class="row">
      <div class="col-sm-4 fs-4 fst-italic">
          <ul>République démocratique du Congo</ul>
          <ul>Gabon</ul>
          <ul>Tunisie</ul>
          <ul>Maroc</ul>
      </div>
      <div class="col-sm-4 fs-4 fst-italic">
        <ul>Kenya</ul>
        <ul>Tanzanie</ul>
        <ul>Ouganda</ul>
        <ul>Burundi</ul>
      </div>
      <div class="col-sm-4 fs-4 fst-italic">
        <ul>Comore</ul>
        <ul>Cameroun</ul>
        <ul>Congo Brazzaville</ul>
        <ul>Algerie</ul>
      </div>
    </div>
  </div>
  </section>

  

  <span class="divider"></span>

  <div class="container-fluid" style="padding-top: 5%">
    <div class="row ">
      <div class="col-sm-6">
        <p class="fs-1 fw-bold">SEAT TO EAT</p>
      </div>
      <div class="col-sm-6">
        <div class="row g-3">
          <div class="col-sm-6">
            <a href="#pays">VOIR TOUT LES PAYS</a>
          </div>
          <div class="col-sm-6">
            <a href="#about">A PROPOS DE SEAT TO EAT</a>
          </div>
          <div class="col-sm-6">
            <a href="signup.php">S'INSCRIRE POUR COMMANDER</a>
          </div>
          <div class="col-sm-6">
            <a href="login.php">SE CONNECTER POUR COMMANDER</a>
          </div>

          <p class="text-start fs-2 fw-bold">SUIVEZ-NOUS SUR</p>
          <ul style="font-size: 25px"><i class="bi bi-instagram"></i> Example_</ul>
          <ul style="font-size: 25px"><i class="bi bi-facebook"></i> Example_</ul>
          <ul style="font-size: 25px"></ul>

          <p class="text-start fs-2 fw-bold">NOS INFOS</p>
          <div class="row g-3">
            <div class="col-sm-6">
              <ul style="font-size: 25px"><i class="bi bi-telephone"></i> +11 75851229</ul>
              <ul style="font-size: 25px"><i class="bi bi-envelope"></i> example9@gmail.com</ul>
            </div>
            <div class="col-sm-6">
              <ul style="font-size: 25px"><i class="bi bi-telephone"></i> +254 717840508</ul>
              <ul style="font-size: 25px"><i class="bi bi-globe2"></i> seattoeat.com</ul>
            </div>
          </div>
          
          <form method="POST">
            <p class="text-start fs-2 fw-bold">CONTACTER NOUS</p>
            <div class="row g-3">
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Entrez votre Prenom" required="required">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Entrez votre Nom" required="required">
              </div>
              <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" required="required" style="height: 100px"></textarea>
                <label for="floatingTextarea2">Laissez votre message</label>
              </div>
              <div class="d-grid">
                <button type="submit" class="btn btn-primary">ENVOYER</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

   
   
  
  
</div> 




    <br>
    <br>
    <br>
    <br>
    <br>
    <br>





<!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->


</body>
</html>
