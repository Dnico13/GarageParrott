<!DOCTYPE html>
<html lang="fr">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page de descriptions des differentes activités proposés par le garage Parrot.">

    <title>Garage Parot: Garage automobile situé dans la région toulousaine.</title>

    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" href="./asset/iconeGarageParrot.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <header>
            <img src="./asset/iconeGarageParrot.jpg" class="LogoHeader">
    </header>
    <main>
        
        <div class="containerPrestation">
                <div class="containerPrestation1">
                    
                        <div>
                            <a href="services.php">
                                <img src="./asset/VisuelRoue.JPG" alt="visuel d'illustration d une roue de voiture monter sur un pont">
                            </a>
                        </div>
                    
                        <h3 class="menuaccueil">Services</h3>
                </div>
                
                
                <div class="containerReparation2">
                        <div>
                            <a href="reparations.php">    
                                <img src="./asset/VisuelReparations.JPG" alt="visuel d'illustration d une reparation d un vehicule">
                            </a>
                        </div>
                    
                        <h3 class="menuaccueil">Réparations</h3>
                </div>
                
                
                <div class="containerventevehicule3">    
                        <div>
                            <a href="ventes.php">
                                <img src="./asset/VisuelVenteVehicules.JPG" alt="Visuel d un parc de vehicule d'occassions a vendre">
                            </a>
                        </div>    
                        <h3 class="menuaccueil">Ventes Vehicules</h3>
                </div>        
                
        </div>

        <section>
                <?php
                    require_once 'temoignage.php';
                ?>
        </section>
    </main>
    <footer>
            <?php
                require_once 'footer.php';
            ?>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./s/app.js"></script>
</body>
</html>