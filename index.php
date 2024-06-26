<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Société Mauritanienne d'Assistance Professionnelle sur la Route.
    Il s'agit d'une société qui fournit des services de transport et d'assistance routière aux particuliers et aux entreprises.">
    <Link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <Link rel="stylesheet" href="style.css">
    <title>SOMAPR</title>
</head>
<body>

    <header>
        <a class="navbar-brand" href="https://somapr.com/fr"> <img src="images/logo.png" alt=""></a>
        <nav class="navigation">
                <ul>
                    <li><a href="#Accueil">Accueil</a></li>
                    <li><a href="#Services">Services</a></li>
                    <li><a href="Demande.php" target="_blank">Demande d'Assistance</a></li>
                    <li><a href="#Contact">Contact</a></li>
                    <li>
                        <a href="#">Se connecter <i class="fas fa-caret-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="login.php">Client</a></li>
                            <li><a href="serviceProvider.php">Fournisseur Service</a></li>
                        </ul>
                    </li>
                </ul>     
        </nav>

        <div class="menu-btn">
            <i class="fa-solid fa-bars"></i>
        </div>

    </header>

    <section class="main" id="Accueil">
        <div>
            <h2> <span>SOMAPR</span> <br> Services de Transport et d'Assistance Routière</h2>
            <a href="Demande.php" class="main-btn" target="_blank" title="Click pour demande d'assistance">Demande d'Assistance</a>
        </div>
        <div>
            <img src="images/background.png" class="main-img" alt="">
        </div>
    </section>

    <section class="description">

        <div class="main-description">
            <p> <span>SOMAPR</span> <br>
            Il s'agit dune plate-forme interactive qui offre des services d'assistance routière en Mauritanie via une application pour smartphone sur les plateformes Apple et Android. 
            SOMAPR offre un service rapide et fiable qui vous sert où que vous soyez. 
            Les forfaits SOMAPR vous feront gagner du temps et de l'argent et vous occuperont des pannes soudaines de votre voiture.
           </p>
        </div>

        <div class="main-content">

            <div class="main-card">
                <div class="icon">
                    <img src="images/time.png" alt="">
                </div>
                <div class="info">
                    <h3>Partout et à tout moment</h3>
                    <p>SOMAPR consacre une flotte de véhicules pour aide et faire face aux pannes ou accidents de la route.</p>
                </div>
            </div>

            <div class="main-card">
                <div class="icon">
                    <img src="images/Help.png" alt="">
                </div>
                <div class="info">
                    <h3>Vous recevrez de l'aide de quelque manière que ce soit</h3>
                    <p>L'équipe des opérations assure le suivi des commandes et communique avec les clients par téléphone 24 heures sur 24, 7 jours sur 7.</p>
                </div>
            </div>

            <div class="main-card">
                <div class="icon">
                    <img src="images/evaluation.png" alt="">
                </div>
                <div class="info">
                    <h3>Votre évaluation signifie beaucoup pour nous</h3>
                    <p>L'évaluation du service par le client est la principale source d'amélioration de nos produits et d'amélioration de la qualité.</p>
                </div>
            </div>

            <div class="main-card">
                <div class="icon">
                    <img src="images/Prices.png" alt="">
                </div>
                <div class="info">
                    <h3>Prix fixes</h3>
                    <p>Tous les prix et les méthodes de facturation sont visibles pour les clients avant d'envoyer une demande de service.</p>
                </div>
            </div>

            <div class="main-card">
                <div class="icon">
                    <img src="images/service provider.png" alt="">
                </div>
                <div class="info">
                    <h3>Faites connaissance avec le fournisseur de services</h3>
                    <p>SOMAPR consultera les données du fournisseur de services dès qu'il remportera la commande, et le client pourra voir l'état de la commande et suivre les mouvements du fournisseur.</p>
                </div>
            </div>

            <div class="main-card">
                <div class="icon">
                    <img src="images/paying.png" alt="">
                </div>
                <div class="info">
                    <h3>Options de paiement</h3>
                    <p>SOMAPR adopte plusieurs méthodes de paiement pour les services, y compris le paiement électronique, les abonnements annuels et le paiement en espèces.</p>
                </div>
            </div>

        </div>

    </section>

    <section class="app">
        <div class="download-app">
            <div>
                <h3>Téléchargez l'application maintenant</h3>
                <p>L'application SOMAPR est disponible sur App Store et Google play.</p>
                
                <div class="app-icon">
                    <a href="#"> <i class="fa-brands fa-app-store-ios"> <span>App Store</span> </i> </a>
                    <a href="#"> <i class="fa-brands fa-google-play"> <span>Google Play</span>  </i> </a>
                </div>
            </div>
            <div class="app-img">
                <img src="images/app.png" alt="">
            </div>
        </div>
    </section>

    <section class="cards" id="Services">
        <h2 class="title">Nos services</h2>
        <div class="content">

            <div class="card">
                <div class="icon">
                    <img src="images/remorquage.png" alt="">
                </div>
                <div class="info">
                    <h3>Services de remorquage</h3>
                    <p>Les clients peuvent choisir le type souhaité parmi une liste de GRUE.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon">
                    <img src="images/roue.png" alt="">
                </div>
                <div class="info">
                    <h3>Services de roue</h3>
                    <p>Gérer à tous les défauts des roues par une réparation sur le site demandé ou remplacement des roues.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon">
                    <img src="images/batterie.png" alt="">
                </div>
                <div class="info">
                    <h3>Services de batterie</h3>
                    <p>Nous chargeons la batterie ou la remplaçons par une neuve.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon">
                    <img src="images/carburant.png" alt="">
                </div>
                <div class="info">
                    <h3>Services du carburant</h3>
                    <p>Livraison d'essence ou de diesel à l'intérieur ou à l'extérieur de la ville.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon">
                    <img src="images/key.png" alt="">
                </div>
                <div class="info">
                    <h3>Services d'ouverture des serrures</h3>
                    <p>Ouverture des serrures du véhicule lorsque cela est nécessaire et en cas d'urgence.</p>
                </div>
            </div>

            <div class="card">
                <div class="icon">
                    <img src="images/gaz-clim.png" alt="">
                </div>
                <div class="info">
                    <h3>Services remplissage du gaz</h3>
                    <p>Nous remplissons du gaz de clim.</p>
                </div>
            </div>

        </div>
    </section>

    <section class="forfait">
        <h2 class="title">Nos Forfaits</h2>

        <div class="descp-forfait">
            <p>Profitez de la tranquillité d'esprit <br> 
            <span>Gagnez du temps et de l'argent avec les forfaits SOMAPR</span></p>
            <a href="forfait.php" class="forfait-btn" target="_blank" title="Click pour obtenir votre forfait">Obtenez Votre Forfait</a>
        </div>

        <div class="content">

            <div class="card">
                <div class="icon">
                    <img src="images/silver.png" alt="">
                </div>
                <div class="info-forfatit">
                    <h3>Forfait Silver</h3>
                    <ul>
                        <li>Interventions de remorquage jusqu'à 50 kilomètres. (1 fois)</li>
                        <li>Changements de roues. (1 fois)</li>
                        <li>Livraisons de carburant. (2 fois)</li>
                    </ul>
                    <div class="montant-forfait1">
                        <p> <b>Montant :</b> <span> 2000 MRU</span> <br> 
                        <small>pour 365 jours.</small> <br> 
                        En achetant cet abonnement, vous économiserez plus de 1400 MRU.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="icon">
                    <img src="images/gold.png" alt="">
                </div>
                <div class="info-forfatit">
                    <h3>Forfait Gold</h3>
                    <ul>
                        <li>Interventions de remorquage jusqu'à 100 kilomètres. (2 fois)</li>
                        <li>Changements de pneus. (2 fois)</li>
                        <li>Cecharges de batterie. (1 fois)</li>
                        <li>Livraisons de carburant. (2 fois)</li>
                    </ul>
                    <div class="montant-forfait2">
                        <p> <b>Montant :</b> <span> 3000 MRU</span> <br> 
                        <small>pour 365 jours.</small> <br> 
                        En achetant cet abonnement, vous économiserez plus de 4000 MRU.
                        </p>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="icon">
                    <img src="images/diamond.png" alt="">
                </div>
                <div class="info-forfatit">
                    <h3>Forfait Diamond</h3>
                    <ul>
                        <li>Assistance routière illimitée (remorquage, recharge de batterie) dans un rayon de 150 kilomètres.</li>
                        <li>Changements de pneus. (4 fois)</li>
                        <li>Livraisons de carburant. (2 fois)</li>
                        <li>Interventions d'ouverture de serrure. (2 fois)</li>
                        <li>Recharges de gaz de climatisation. (2 fois)</li>
                    </ul>
                    <div class="montant-forfait">
                        <p> <b>Montant :</b> <span> 4000 MRU</span> <br> 
                        <small>pour 365 jours.</small> <br> 
                        En achetant cet abonnement, vous économiserez plus de 5000 MRU.
                        </p>
                    </div>
                </div>
            </div>
             
        </div>
    </section>

    <section class="top-footer" id="Contact">
        <h2 class="title">Contactez-Nous</h2>
        <p>L'équipe de SOMAPR est heureuse de recevoir tous vos commentaires et demandes de renseignements 24 heures sur 24 
           via l'application ou le site Web officiel en ajoutant un commentaire ou en appelant la hotline.</p>
        
        <div class="f-info">
            <div class="location">
                <i class="fa-solid fa-location-dot"></i>
                <p>Société SOMAPR, le siége central près du Hôpital Ophtalmologique de la Fondation Bouamatou - Nouakchott Mauritanie.</p></p>
            </div>
            <div class="mail">
                <i class="fa-solid fa-envelope"></i>
                <p>Email : info@somapr.com</p>
            </div>
            <div class="phone">
                <i class="fa-solid fa-phone-volume"></i>
                <p>Téléphone : +222 #######</p>
                <p></p>
            </div>
        </div>

        <div class="f-links">
            <p>Réseaux sociaux</p>
            <i class="fa-brands fa-square-facebook"></i> 
            <i class="fa-brands fa-instagram"></i> 
            <i class="fa-brands fa-square-snapchat"></i> 
            <i class="fa-brands fa-tiktok"></i> 
            <i class="fa-brands fa-linkedin-in"></i> 
        </div>
    </section>

    <footer class="footer">
        <p class="footer-title">&copy; 2024 SOMAPR. Tous droits réservés.</p>
    </footer>

</body>
</html>