<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil | E-Commerce</title>
    <meta name="description" content="une brève description de la page qui doit être différente dans chaque page">
    <link rel="stylesheet" type="text/css" href="./assets/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/icons-1.9.1/font/bootstrap-icons.css">
    <script type="text/javascript" src="./assets/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand" title="Afficher la page d'acceuil">
            <img  src="./image/S.png" alt="Logo" width="60" height="60" class="rounded-circle">
        </a>
        <button type="button" title="Afficher menu" class="navbar-toggler">
            <i class="navbar-toggler-icon" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
            </i>
        </button>
        <nav class="nav offcanvas offcanvas-end" id="offcanvasNavbar" tabindex="-1">
            <div class="offcanvas-header">
                <h5>
                    <a href="#" title="Afficher la page d'acceuil" class="navbar-brand text-dark" >
                        Mon site
                    </a>
                </h5>
                <button type="button" title="Fermer" class=" btn btn-close btn-outline-danger" data-bs-dismiss="offcanvas" >

                </button>
            </div>
            <div class="offcanvas-body bg-dark" >
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="#" target="_blank" class="nav-link" title="Afficher la page d'acceuil">
                            <i class="bi-house-fill"></i>
                            Accueil
                        </a>
                    </li>
                    <li class="nav-item" title="Afficher la page de contact">
                        <a href="#" target="_blank" class="nav-link" title="Afficher la page de contact">
                            <i class="bi-telephone-fill"></i>
                            Contact
                        </a>
                    </li>
                    <li class="nav-item" title="Afficher la page à propos de nous ">
                        <a href="#" target="_blank" class="nav-link" title="Afficher la page à propos de nous ">
                            <i class="bi-info-circle"></i>
                            A propos de nous
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="" target="_blank" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" title="Afficher mon compte">
                            <img src="./image/S.png" alt="Samuel Issozet" width="25" height="25" class=" rounded-circle">
                            Mon compte
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item">
                                <a href="" target="_blank" class="nav-link text-dark" title="Afficher mon profil">
                                    <i class="bi-person-fill"></i>
                                    Mon profil
                                </a>
                            </li>
                            <li class="dropdown-item">
                                <a href="#" class="nav-link text-dark" target="_blank" title="Afficher mon tableau de bord">
                                    <i class="bi-speedometer2"></i>
                                    Mon tableau de bord
                                </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
									<span class="dropdown-header">
										Déconnexion
									</span>
                            </li>
                            <li class="dropdown-item">
                                <a href="#" class="nav-link text-dark" target="_blank" title="Cliquer ici pour se déconnecter">
                                    <i class="bi-power"></i>
                                    Se déconnecter
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<main class="home-main container">
    <h1 class="text-dark my-5 p-4 rounded shadow text-center text-uppercase fw-bold" style="background-color: rgba(0, 0, 0, 0.05)">
        S&A Mansory
    </h1>
    <!-- sssssssssssssss -->

    <!-- Debut du carousel -->
    <div class="row">
        <div class="col-md-8 col-lg-6 col-lg-3 offset-lg-3 offset-md-2">
            <div class="navbar">

            </div>
            <div class="rounded shadow-lg p-2">
                <div class="carousel slide carousel-fade"  data-bs-ride="carousel" data-bs-pause="false" id="SAM3" data-bs-keyboard="false" data-bs-touch="false" data-bs-wrap="false"> <!-- bloc de slider-->
                    <ol class="carousel-indicators rounded" style=" background-color : rgba(0, 0, 0, 0.5);">
                        <li class="active" data-bs-slide-to="0" data-bs-target="#SAM"></li>
                        <li data-bs-slide-to="1" data-bs-target="#SAM"></li>
                        <li data-bs-slide-to="2" data-bs-target="#SAM"></li>
                    </ol>
                    <div class="carousel-inner"><!-- Definit le contenu-->
                        <div class="carousel-item active" data-bs-interval="5000"> <!-- contenu -->
                            <img src="./image/SN_W17_HW_US_SX_712x384_CUISINE.jpg" alt="Tout pour la cuisine" class="img-thumbnall">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="./image/SN_W18_BEAUTE_EOM_SX_712x384.jpg" alt="Vos produits de beaute" class="img-thumbnall">
                        </div>
                        <div class="carousel-item" data-bs-interval="5000">
                            <img src="./image/SN_W19_PUSH_HOME_SX_712x384_.jpg" alt="Vos produits de " class="img-thumbnall">
                        </div>

                    </div>
                    <button type="button" class="carousel-control-prev" title="Image precedente" data-bs-slide="prev" data-bs-target="#SAM">
                        <i class="carousel-control-prev-icon bg-secondary rounded">

                        </i>
                    </button>

                    <button type="button" class="carousel-control-next" title="Image Suivante" data-bs-slide="next" data-bs-target="#SAM">
                        <i class="carousel-control-next-icon bg-secondary rounded">

                        </i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fin du caroufel -->

    <!-- Debut de fenetre modale -->
    <button type="button" class="btn btn-primary btn-lg my-5 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam">
        AFFICHER LA FENETRE
    </button>
    <div class="modale" id="Sam2"> <!-- bloc de la fenetre-->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" >
                    <span ><h2>Plongez dans le Monde de la Mode avec nos produits avec un CLIQUE</h2></span>
                </div>
                <div class="modal-body">
                    <img src="./image/logobalen.jpg" class="card-img-top" alt="Trapstars" title="Produits balenciaga">
                </div>

                <div class="modal-footer">
                    <img src="image/800.webp" class="card-img-top" alt="Nike" title="Produits Nike">
                </div>
            </div>
        </div>
    </div>
    <!-- Fin de fenetre modale -->

    <section class="my-4 shadow-lg rounded bg-light position-relative "><span class="text-center"><h3>Nous vous offrons une petite description de notre site</h3></span><a href="#" class="text-muted text-decoration-none"><h5>Bienvenue dans notre boutique en ligne de vêtements et de chaussures, l'endroit idéal pour trouver les dernières tendances de la mode et les articles les plus élégants. Que vous recherchiez des vêtements décontractés, des tenues formelles ou des chaussures pour toutes les occasions, nous avons ce qu'il vous faut.

                Dès que vous entrez dans notre boutique en ligne, vous serez immédiatement séduit par notre vaste sélection de produits. Nous avons soigneusement choisi chaque article pour vous offrir des options de haute qualité, alliant style et confort. Que vous soyez un homme ou une femme, vous trouverez ici des vêtements et des chaussures qui correspondent à votre style personnel.

                Notre boutique en ligne propose une interface conviviale et intuitive, facilitant ainsi votre expérience de shopping. Vous pouvez naviguer facilement à travers les différentes catégories, filtrer vos recherches par couleur, taille ou prix, et même consulter les avis des clients pour vous aider dans votre choix. Nous mettons un point d'honneur à rendre votre expérience d'achat en ligne aussi agréable que possible.

                Nous travaillons en étroite collaboration avec des marques renommées et des designers talentueux pour vous offrir une gamme de produits diversifiée et à la pointe de la mode. Que vous recherchiez des vêtements de créateurs, des marques internationales ou des produits locaux, notre boutique en ligne est l'endroit où vous trouverez tout ce que vous désirez.

                En plus de notre large sélection, nous mettons également l'accent sur la qualité du service à la clientèle. Notre équipe dévouée est toujours prête à répondre à vos questions, à vous guider dans vos choix et à vous aider tout au long du processus d'achat. Nous comprenons l'importance de votre satisfaction en tant que client, et nous mettons tout en œuvre pour vous offrir une expérience de shopping en ligne exceptionnelle.

                Une fois que vous avez trouvé les vêtements ou les chaussures parfaits, vous pouvez passer votre commande en quelques clics seulement. Nous offrons des options de paiement sécurisées et des méthodes de livraison rapides pour que vous puissiez recevoir vos articles dans les meilleurs délais. Et si jamais vous n'êtes pas entièrement satisfait de votre achat, notre politique de retour flexible vous permet de retourner ou d'échanger facilement vos produits.

                Alors, n'attendez plus et plongez dans notre boutique en ligne de vêtements et de chaussures pour découvrir un monde de style et d'élégance. Que vous cherchiez à vous faire plaisir ou à trouver le cadeau parfait, nous sommes là pour vous aider à exprimer votre style et à vous sentir bien dans votre peau. Bon shopping !</h5></a></section>
    <section class="my-4 shadow-lg rounded bg-light" >
		<span class="text-center"><h2 class="bg-light rounded-top px-2">
			Gallerie
		</h2></span>
        <div class="row">
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">Bralecet en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/bracelet.jpg" alt="bracelet" title="bracelet">
                        Nos colliers en argent sont des pièces élégantes et intemporelles qui ajoutent une touche de raffinement à n'importe quelle tenue.
                    </p>
                </div>
            </article>
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">Bralecet en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/b1.jpg" alt="bracelet" title="bracelet">
                        Fabriqués avec soin et attention aux détails, nos colliers en argent sont durables et résistants, vous assurant ainsi une qualité exceptionnelle.
                    </p>
                </div>
            </article>
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">chaine en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/b2.jpg" alt="bracelet" title="bracelet">
                        Avec leur design délicat et leur éclat subtil, nos colliers en argent sont parfaits pour exprimer votre style personnel et ajouter une touche de sophistication à votre look.
                    </p>
                </div>
            </article>
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">chaine en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/b3.png" alt="bracelet" title="bracelet">
                        Que vous recherchiez un collier minimaliste pour un look discret ou un pendentif orné pour une occasion spéciale, notre collection de colliers en argent offre une variété de choix pour satisfaire tous les goûts et toutes les occasions.
                    </p>
                </div>
            </article>
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">chaine en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/b4.jpg" alt="bracelet" title="bracelet">
                        Nos colliers en argent sont également hypoallergéniques, ce qui les rend adaptés aux personnes ayant une peau sensible, offrant ainsi confort et tranquillité d'espri
                    </p>
                </div>
            </article>
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">Bralecet en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/b5.jpg"  alt="bracelet" title="bracelet">
                        Chaque collier en argent est livré avec un fermoir sécurisé, assurant que votre bijou précieux reste en place tout au long de la journée, ajoutant une touche de confiance à votre allure.
                    </p>
                </div>
            </article>
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">Bralecet en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/chaine.png" alt="chaine en Argent" title="chaine en argent">
                        Que vous souhaitiez superposer plusieurs colliers en argent ou porter un seul collier pour une élégance discrète, notre collection vous offre la possibilité de créer des combinaisons uniques qui répondent à votre style individuel.
                    </p>
                </div>
            </article>
            <article class="col ">
                <div class="m-2 bg-light rounded">
                    <h4 class="bg-light rounded-top px-2">Chainette en argent</h4>
                    <p class="px-2 text-dark">
                        <img src="./image/b5.jpg"  alt="bracelet" title="bracelet">

                        Les colliers en argent sont des cadeaux attentionnés et intemporels, parfaits pour célébrer des moments spéciaux tels que les anniversaires, les mariages ou simplement pour exprimer votre affection envers un être cher.
                    </p>
                </div>
            </article>
        </div>
    </section>
    <section class="my-4 shadow-lg rounded bg-light position-relative ">
        <a href="#" class="text-decoration-none text-dark position-absolute fw-bold end-0 me-2 mt-2" > Voir plus</a>
        <h2 class="bg-warning rounded-top px-2 text-center">Nous disposons une très bonne Gamme de produits Trapstars</h2>
        <div class="p-2">
            <div class="row">
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -10%
                            </div>
                            <img src="./image/D6.jpeg" class="card-img-top" alt="Trapstars" title="Produits Trapstars">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Trapstars</h4>
                                <p class="card-text">
									<span class="fw-bold">
									   270 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
									300 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>

                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -20%
                            </div>
                            <img src="./image/D5.jpeg" class="card-img-top" alt="Trapstars" title="Produits Trapstars">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Trapstars</h4>
                                <p class="card-text">
									<span class="fw-bold">
										200 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										220 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -10%
                            </div>
                            <img src="./image/D4.jpeg" class="card-img-top" alt="Trapstars" title="Produits Trapstars">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Trapstars</h4>
                                <p class="card-text">
									<span class="fw-bold">
										72 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										80 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/D3.jpeg" class="card-img-top" alt="Trapstars" title="Produits Trapstars">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Trapstars</h4>
                                <p class="card-text">
									<span class="fw-bold">
										200 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										400 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/D2.jpeg" class="card-img-top" alt="Trapstars" title="Produits Trapstars">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Trapstars</h4>
                                <p class="card-text">
									<span class="fw-bold">
										200 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										400 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/D1.jpeg" class="card-img-top" alt="Trapstars" title=" Produits Trapstars">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Trapstars</h4>
                                <p class="card-text">
									<span class="fw-bold">
										250 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										500 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="my-4 shadow-lg rounded bg-light">
        <h2 class="bg-warning rounded-top px-2 text-center">Nouveauté</h2>
        <div class="p-2">  <!--permet d ajuster tout le contenu de la section-->
            <div class="row"><!-- Definit une ligne-->
                <article class="col-3">
                    <div class="bg-light rounded"><!--  permet d ajuster le blocs de l article -->
                        <h4 class="bg-light rounded-top px-2">Nos produits balenciaga</h4>
                        <p class="text-light px-2">
                            <img src="./image/j1.jpg" alt="jeans femme" class="card-img-top" title="jeans">
                        </p>
                    </div>
                </article>
                <article class="col-3">
                    <div class="bg-light rounded"><!--  permet d ajuster le blocs de l article -->
                        <h4 class="bg-light rounded-top px-2">Veste jumia</h4>
                        <p class="text-light px-2">
                            <img src="./image/v7.jpeg" class="card-img-top" alt="veste jeans" title="jeans">
                        </p>
                    </div>
                </article>
                <article class="col-3">
                    <div class="bg-light rounded"><!--  permet d ajuster le blocs de l article -->
                        <h4 class="bg-light rounded-top px-2">Veste jeans personalisé</h4>
                        <p class="text-light px-2">
                            <img src="./image/v8.jpeg" class="card-img-top" alt="veste jeans" title="jeans">
                        </p>
                    </div>
                </article>
                <article class="col-3">
                    <div class="bg-light rounded"><!--  permet d ajuster le blocs de l article -->
                        <h4 class="bg-light rounded-top px-2">Veste jeans personalisé par balenciaga</h4>
                        <p class="text-dark px-2">
                            <img src="./image/vestej3.jpg" class="card-img-top" alt="veste jeans" title="jeans">
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="my-4 shadow-lg rounded bg-light position-relative ">
        <a href="#" target="_blank" class="text-decoration-none text-dark position-absolute fw-bold end-0 me-2 mt-2" > Voir plus</a>
        <h2 class=" bg-warning rounded-top px-2 text-center"> Nous disposons une très bonne Gamme de produits Nike  </h2>
        <div class="p-2">
            <div class="row">
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/N5.jpg" class="card-img-top" alt="Nike" title="Produits Nike">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >NIke</h4>
                                <p class="card-text">
									<span class="fw-bold">
										100 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										200 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                                <span class="text-dark">Nouveau modele de Nike 98 toute dans un melange de couleur</span>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/N6.jpg" class="card-img-top" alt="Nike" title="Produits Nike">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Nike</h4>
                                <p class="card-text">
									<span class="fw-bold">
										50 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										100 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                                <span class="text-dark">Nouveau modele de nike 98 toute dans un melange de couleur</span>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/N8.jpg" class="card-img-top" alt="NIKe" title="Produits Nike">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Nike </h4>
                                <p class="card-text">
									<span class="fw-bold">
										60 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										120 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                                <span class="text-dark" >Nouveau modele de Nike 98 toute dans un melange de couleur</span>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/N-Resposto.jpg" class="card-img-top" alt="Nike Resposto" title="Produits Nike">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Nike Resposto</h4>
                                <p class="card-text">
									<span class="fw-bold">
										50 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										100 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>

                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/N-Furyosa.jpeg" class="card-img-top" alt="Nike Furyosa" title="Produits Nike">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Nike Furyosa Black and White</h4>
                                <p class="card-text">
									<span class="fw-bold">
										50 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										100 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none"><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/N98.jpeg" class="card-img-top" alt="Nike 98" title="Produits Nike">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Nike 98</h4>
                                <p class="card-text">
									<span class="fw-bold">
										60 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										120 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none"> <span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </section>

    <section class="my-4 shadow-lg rounded bg-light">
        <h2 class="bg-warning rounded-top px-2 text-center">QUE DEVRIEZ VOUS SAVOIR SUR NOS PRODUITS</h2>
        <div class="px-2"><!-- permet d ajuster la ligne -->
            <div class="row"><!-- definit la ligne -->
                <article class="col-4">
                    <div class="bg-light rounded "> <!-- permet d ajuster l article -->
                        <h4 class="bg-light rounded-top px-2 text-center">
                            NIKE Description
                        </h4>
                        <p class="text-light px-2">
                            <img src="image/600.jpeg" class="card-img-top" alt="Produits Nike" title="NIKE">

                        </p>
                    </div>
                    <div>
                        <p><h6>Nike est une marque emblématique dans l'industrie de la mode et du sport. Avec son logo reconnaissable et sa réputation de qualité exceptionnelle, Nike incarne l'excellence et l'innovation. Que vous soyez un athlète passionné ou simplement à la recherche d'une paire de baskets tendance, Nike propose une vaste gamme de produits qui répondent à tous les besoins. Des chaussures de course légères et performantes aux vêtements de sport confortables et stylés, Nike allie style, fonctionnalité et durabilité pour vous permettre de repousser vos limites.</h6></p>
                    </div>
                </article>
                <article class="col-6">
                    <div class="bg-light rounded "> <!-- permet d ajuster l article -->
                        <h4 class="bg-light rounded-top px-2 text-center">
                            NIKE FURYOSA
                        </h4>
                        <p class="text-light px-2">
                            <img src="image/N-Furyosa.jpeg" class="card-img-top" alt="Nike" title="Produits Nike">
                        </p>
                    </div>
                </article>
                <article class="col-2">
                    <div class="bg-light rounded "> <!-- permet d ajuster l article -->
                        <h4 class="bg-light rounded-top px-2 text-center">
                            sponsorisation
                        </h4>
                        <p class="text-light px-2">
                            <img src="image/00.jpeg" class="card-img-top" alt="Nike" title="Produits Nike">
                        </p>
                    </div>
                    <div>
                        <p>
                            <h7>
                                Outre ses produits de haute qualité, Nike est également connu pour son engagement envers l'environnement et la responsabilité sociale. La marque s'efforce de réduire son empreinte écologique en adoptant des pratiques durables et en utilisant des matériaux recyclés dans la fabrication de ses produits. De plus, Nike soutient de nombreuses initiatives sociales, notamment l'égalité des chances, l'inclusion et l'accès au sport pour tous.
                            </h7>
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <div class="modale" id="Sam"> <!-- bloc de la fenetre-->
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2>Suivre le catalogue</h2>
                </div>

                <div class="modal-footer">
                    <img src="image/700.webp" class="card-img-top" alt="Nike" title="Produits Nike">
                </div>
            </div>
        </div>
    </div>
    <section class="my-4 shadow-lg rounded bg-light position-relative ">
        <a href="#" target="_blank" class="text-decoration-none text-dark position-absolute fw-bold end-0 me-2 mt-2" > Voir plus</a>
        <h2 class="bg-warning rounded-top px-2 text-center">Nous disposons une très bonne Gamme de produits en jeans</h2>
        <div class="p-2">
            <div class="row">
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/v3.jpeg" class="card-img-top" alt="veste en jeans" title="Veste jeans">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Veste jeans</h4>
                                <p class="card-text">
									<span class="fw-bold">
										5000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										10 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none"><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/v4.jpeg" class="card-img-top" alt="veste en jeans" title="Veste jeans">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >veste jeans</h4>
                                <p class="card-text">
									<span class="fw-bold">
										25 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										50 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#"class="text-decoration-none"><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/v5.jpeg" class="card-img-top" alt="veste en jeans" title="Veste jeans">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >veste jeans</h4>
                                <p class="card-text">
									<span class="fw-bold">
										15 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										30 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#"class="text-decoration-none"><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/v6.jpeg" class="card-img-top" alt="Veste en jeans" title="Veste jeans">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Veste jeans</h4>
                                <p class="card-text">
									<span class="fw-bold">
										15 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										30 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#"class="text-decoration-none"><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/v7.jpeg" class="card-img-top" alt="Veste en jeans" title="Veste jeans">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >veste jeans</h4>
                                <p class="card-text">
									<span class="fw-bold">
										15 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										30 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none"><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/v1.jpeg" class="card-img-top" alt="Veste en jeans" title="Veste jeans">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Veste en jeans</h4>
                                <p class="card-text">
									<span class="fw-bold">
										50 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										100 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </section>
    <section class="my-4 shadow-lg rounded bg-light position-relative ">
        <a href="#" target="_blank"class="text-decoration-none text-dark position-absolute fw-bold end-0 me-2 mt-2" > Voir plus</a>
        <h2 class="bg-warning rounded-top px-2 text-center"> Nous disposons une très bonne Gamme de produits Addidas  </h2>
        <div class="p-2">
            <div class="row">
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/add1.png" class="card-img-top" alt="Addidas" title="Produits Addidas">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Addidas</h4>
                                <p class="card-text">
									<span class="fw-bold">
										50 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										100 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>

                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank" class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/add2.jpg" class="card-img-top" alt="Addidas" title="Produits Addidas">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Addidas</h4>
                                <p class="card-text">
									<span class="fw-bold">
										50 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										100 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>

                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/add3.jpeg" class="card-img-top" alt="Addidas" title="Produits Addidas">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Addidas </h4>
                                <p class="card-text">
									<span class="fw-bold">
										50 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										100 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>

                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/add4.jpeg" class="card-img-top" alt="Addidas" title="Produits Addidas">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Addidas</h4>
                                <p class="card-text">
									<span class="fw-bold">
										45 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										50 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none" ><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>

                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/add6.jpeg" class="card-img-top" alt="Addidas" title="Produits Addidas">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Addidas</h4>
                                <p class="card-text">
									<span class="fw-bold">
										100 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										120 000 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none"><span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class=" col-md-4 col-sm-6 col-lg-2">
                    <a href="#" target="_blank"class=" text-decoration-none text-dark ">
                        <div class="card position-relative">
                            <div class="alert alert-warning texr-danger position-absolute p-0 end-0">
                                -50%
                            </div>
                            <img src="./image/add5.jpeg" class="card-img-top" alt="Addidas" title="Produits Addidas">
                            <div class="card-body">
                                <h4 class="card-title fs-6 fw-normal" >Addidas</h4>
                                <p class="card-text">
									<span class="fw-bold">
										90 000 FCFA
									</span>
                                    <br>
                                    <span class="text-muted text-decoration-line-through">
										95 500 FCFA
									</span>
                                    <button type="button" class="btn btn-success btn-xs position-absolute text-muted mx-0 end-0 px-1 py-0 shadow-lg" data-bs-toggle="modal" data-bs-target="#Sam" title="Achat">
                                        <a href="#" class="text-decoration-none"> <span class="Start-1 text-dark fs-25">Acheter</span></a>
                                    </button>
                                </p>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
        </div>
    </section>

</main>
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- adresse -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="me-5 d-none d-lg-block" >
            <span><h3>Vous Pouvez nous rejoindre sur ces plateformes :</h3></span>
        </div>
        <!-- Left -->

        <!-- Right -->
        <div class="">
            <a  href="facebook.com" title="facebook"  class="me-4 text-reset">
                <i class="fab bi-facebook"></i>
            </a>
            <a href="twitter.com" title="twitter" class="me-4 text-reset">
                <i class="fab bi-twitter"></i>
            </a>
            <a href="google.com" title="google" class="me-4 text-reset">
                <i class="fab bi-google"></i>
            </a>
            <a href="instagram.com" title="Instagram" class="me-4 text-reset">
                <i class="fab bi-instagram"></i>
            </a>
            <a href="linkedin.com" title="linkedin" class="me-4 text-reset">
                <i class="fab bi-linkedin"></i>
            </a>
            <a href="github.com" title="github" class="me-4 text-reset">
                <i class="fab bi-github"></i>
            </a>
        </div>

        <!-- Right -->
    </section>
    <!-- nav -->
    <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        <i class="fas bi-gem me-3"></i> S&A Society
                    </h6>
                    <p>
                    <h4>Comment gerons-Nous notre entreprise ?</h4>
                    </p>

                </div>



                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Autres Produits
                    </h6>
                    <p>
                        <a class="text-decoration-none text-dark" title="Autres artices" href="#!" class="text-reset">Street-Wear</a>
                    </p>
                    <p>
                        <a  class="text-decoration-none text-dark" title="Autres artices" href="#!" class="text-reset">Cargo militaire</a>
                    </p>
                    <p>
                        <a class="text-decoration-none text-dark" title="Autres artices" href="#!" class="text-reset">Ensemble Pre-consu par nos artices</a>
                    </p>
                    <p>
                        <a class="text-decoration-none text-dark" title="Autres artices" href="#!" class="text-reset">Luxe</a>
                    </p>
                    <p>
                        <a class="text-decoration-none text-dark" title="Autres artices" href="#!" class="text-reset">Accessoires</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Confidentialite
                    </h6>
                    <p>
                        <a class="text-decoration-none text-dark" title="Partenariat" href="#!" class="text-reset">Nos Partenaires</a>
                    </p>
                    <p>
                        <a class="text-decoration-none text-dark" title="Parametre" href="#!" class="text-reset">Parametre</a>
                    </p>
                    <p>
                        <a class="text-decoration-none text-dark" title="affiliation" href="#!" class="text-reset">Affiliation</a>
                    </p>
                    <p>
                        <a class="text-decoration-none text-dark" title="Aide" href="#!" class="text-reset">Aide</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Nous Contactez</h6>

                    <address class="">
                        <p><i class="fas bi-house me-3 "></i>
                            <a class="text-decoration-none text-dark" title="Geoloalisation" alt="Geolocalisation" href="https://www.google.com/maps/place/14%C2%B043'32.0%22N+17%C2%B028'22.0%22W/@14.725567,-17.4753683,17z/data=!3m1!4b1!4m4!3m3!8m2!3d14.725567!4d-17.472788?entry=ttu">
                                <!-- <map class="">
                                <area shape="poly" coords="14.725567, -17.472788" href="10464 Rue MZ 06, Dakar, Sénégal">
                            </map> -->
                                10464 Rue MZ 06, Dakar, Sénégal
                            </a>
                        </p>
                        <p>
                            <i class="fas bi-envelope me-3 "></i>
                            <a class="text-decoration-none text-dark" title="E-Mail" href="mailto:samiisc33@gmail.com">Samiisc33@gmail.com</a>
                        </p>
                        <p><i class="fas bi-phone me-3 "></i>
                            <a class="text-decoration-none text-dark" title="Telephone" href="tel:+221774274455">+221774274455</a>
                        </p>
                        <p><i class="fas bi-facebook me-3 "></i>
                            <a class="text-decoration-none text-dark" title="facebook" href="htpps://facebook.com/sami isc">Sami Isc</a>
                        </p>
                        <p><i class="fas bi-instagram me-3 "></i>
                            <a class="text-decoration-none text-dark" title="instagram" href="htpps://instagram.com/_Sami_Isc">Sami Isc</a>
                        </p>


                    </address>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- from -->
    <section class="d-flex">
        <div class="row d-flex justify-content-center text-center">
            <h5>
                N HESITEZ PAS A POSER VOS QUESTIONS NOUS SOMMES LA POUR VOUS !!
                <br>
                NOUS AVONS UNE EQUIPE H24 A L ECOUTE DE VOS BESIONS
            </h5>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <section class=" container  justify-content-center text-center p-10">
            <div class="col-md-5 col-12">
                <!-- Email input -->
                <div class="form-outline form-white mb-4">
                    <input type="email" id="form5Example21" class="form-control" />
                    <label class="form-label" for="form5Example21">Votre Addresse</label>
                </div>
                <div class="form-group">
                    <textarea name="contenthelp" placeholder="Vous pouvez détaillé votre demande ici (facultatif)" class="form-control"></textarea>
                </div>
                <button class="text-decoration-none  text-dark " type="submit">Partager</button>
            </div>
        </section>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Let's GO
        <a class="text-reset fw-bold" href="#">S&A Mansory.com</a>
    </div>
</footer>
</body>
</html>