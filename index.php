<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'BENOIT, NOTRE ARTISAN SERRURIER INTERVIENT'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? ''));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>
<body>
        <!--Шапка сайта-->
        <header class="header d-none d-lg-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 header-container">
                        <div class="header-box">
                            <div class="logo">
                                <img class="logo__image" src="assets/img/logo.png" alt="" >
                            </div>
                            <div class="logo-efficiency">
                                <img class="logo-efficiency__img logo-efficiency__img--mx" src="assets/img/icone-local.png" alt="" >
                                <div class="logo-efficiency__all-text">
                                    <p class="logo-efficiency__text">Votre serrurier intervient</p>
                                    <p class="logo-efficiency__text-yellow">En moins de 30 minutes </p>
                                </div>
                            </div>
                            <div class="logo__hr logo__hr--mr"></div>
                            <div class="logo-contacts">
                                <img class="logo-contacts__image logo-contacts__image--mx" src="assets/img/icone-tel.png" alt="" >
                                <div class="logo-contacts__tell-text">
                                    <p class="logo-contacts__schedule">24h/24 - 7j/7</p>
                                    <a class="logo-contacts__number" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                                    <p class="logo-contacts__small-text">Appel gratuit non surtaxé</p>
                                </div>
                            </div>
                        </div>
                    </div>                 
                </div>            
            </div>
        </header>
            <!-- Раздел страницы-->
            <section class="first-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 first-section-container">
                            <div class="description">
                                <h1 class="desctiption__title"><?= $title ?></h1>
                        <!--         <div class="description__imges">
                                    <img class="description__img" src="assets/img/panneau-paris-0.png" alt="" >
                                </div> -->
                                <p class="description__text mt-3">Devis et déplacement gratuit</p>
                                <div class="description__number d-grid col-4 m-auto mb-2">
                                    <a class="description__link btn text-end pe-4" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                                </div>
                                <p class="description__mini-text">APPEL GRATUIT NON SURTAXÉ</p>
                            </div>
                        </div>                 
                    </div>            
                </div>
                <!-- Определяет статью -->
                <article>
                    <div class="container">
                        <div class="row">
                            <div class="col">...</div>                 
                        </div>            
                    </div>
                </article>
            </section>
            <section class="second-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 second-section-container">
                            <h2 class="second-section__title mt-5 mb-4">Votre serrurier professionnel</h2>
                            <div class="second-box">
                                <div class="left-block pb-4">
                                    <div class="left-block__images">
                                        <img class="left-block__img" src="assets/img/serrurier-urgence.jpg" alt="" >
                                    </div>
                                    <p class="left-block__subtitle mt-4">Confiez vos dépannage en serrurerie à un vrai spécialiste !</p>
                                    <p class="left-block__paragraph">Fort de notre expérience de plus de 15 ans en serrurerie, nous sommes les leaders dans le domaine à Paris. Nous intervenons dans différents champs du domaine du dépannage à l'installation et à la  sécurisation.</p>
                                    <p class="left-block__paragraph">Reconnus pour notre expértise, notre entreprise est à la pointe des dernières évolutions technologiques. Ce qui nous permet de vous proposer des solutions dignes de votre confiance.</p>
                                    <p class="left-block__paragraph">Votre satisfaction est au coeur de nos préoccupations. En cas d'urgence nous pouvons vous proposer un dépannage de qualité dans des délais très courts.</p>
                                    <p class="left-block__paragraph-4-strong">Pour connaitre tous nos tarifs, merci de nous contacter par téléphone</p>
                                    <div class="left-block__number d-grid col-4 m-auto mt-4 mb-2">
                                        <a class="left-block__link btn text-end pe-4" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                                    </div>
                                    <p class="left-block__small-text">Appel gratuit non surtaxé</p>
                                </div>
                                <div class="right-block">
                                    <div class="right-block-one">
                                        <p class="right-block-one__text">Intervention <b>rapide</b> à domicile
                                            Chez vous en <b>moins de 30 minutes</b></p>
                                    </div>
                                    <div class="right-block-one">
                                        <p class="right-block-one__text"><b>Disponible</b> à toute heure
                                            Intervention 24H/24, 7J/7</p>
                                    </div>
                                    <div class="right-block-one">
                                        <p class="right-block-one__text">Devis rapide et <b>gratuit</b>
                                            sans engagement</p>
                                    </div>
                                    <div class="right-block-one">
                                        <p class="right-block-one__text">Plus de <b>15 ans</b> d’expérience
                                            dans la serrurerie</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="third-section  mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 third-section-container ">
                            <div class="third-box py-5">
                                <div class="third-left-block">
                                    <h2 class="left-block__title mb-4">Nos autres prestations</h2>
                                    <div class="list">
                                        <ul class="list__ul">
                                            <li class="list__li">Remplacement rideaux métalliques</li>
                                            <li class="list__li">Ouverture de portes fermées</li>
                                            <li class="list__li">Changement de serrures</li>
                                            <li class="list__li">Installation de Blindage</li>
                                            <li class="list__li">Mise en conformité</li>
                                        </ul>

                                        <ul class="list__ul">
                                            <li class="list__li">Sécurisation après cambriolage</li>
                                            <li class="list__li">Réparation de porte</li>
                                            <li class="list__li">Porte claquée, clés à l’intérieur</li>
                                            <li class="list__li">Installation de porte blindée</li>
                                            <li class="list__li">Changement de serrure</li>
                                        </ul>

                                        <ul class="list__ul">
                                            <li class="list__li">Dépannage Rideaux métalliques</li>
                                            <li class="list__li">Montant de porte tordu</li>
                                            <li class="list__li">Dépannage volets roulants</li>
                                            <li class="list__li">Mise aux normes assurances A2p</li>
                                            <li class="list__li">Remplacement de serrure</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="third-right-block">
                                    <h2 class="right-block__title right-block--mb">Exigence qualité</h2>
                                    <p class="right-block__text">Pour nos clients, nous nous engageons à n'utiliser que des matériaux de qualité, des plus grandes marques.</p>
                                    <div class="right-block__images">
                                        <img class="right-block__img" src="assets/img/marques.png" alt="" >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fourth-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 fourth-section-container">
                            <h2 class="fourth-section-title my-5">Nos services</h2>
                            <div class="Our-services">
                                <div class="services">
                                    <img class="services__img" src="assets/img/1-serrure-ouverture-porte.jpg" alt="" >
                                    <h3 class="sevices__title mt-3">Ouverture de porte</h3>
                                    <p class="services__text">Vous êtes bloqué dehors car vous avez perdu vos clefs, ou les avez oublié. Notre services de dépannage en urgence intervient 24h/24 et 7j/7. Nos techniciens seront chez vous en moins d’une heure.</p>
                                </div>
                                <div class="services">
                                    <img class="services__img" src="assets/img/2-serrure-changement-serrure.jpg" alt="" >
                                    <h3 class="sevices__title mt-3">Changement de serrure</h3>
                                    <p class="services__text">Vous souhaitez simplement changer votre serrure de porte, de boite aux lettres ou un verrou. Nos techniciens peuvent intervenir dans la journée. De plus nous n’utilisons que du matériel de qualité.</p>
                                </div>
                                <div class="services">
                                    <img class="services__img" src="assets/img/3-serrure-blindage.jpg" alt="" >
                                    <h3 class="sevices__title mt-3">Installation Blindage</h3>
                                    <p class="services__text">Vous souhaitez plus de sécurité. Nous pouvons installer votre porte blindée ou blindée votre porte actuelle. Cette technique consiste à renforcer une porte simple en posant des tôles de métal et une serrure haute sûreté 3 ou 5 points.</p>
                                </div>
                                <div class="services">
                                    <img class="services__img" src="assets/img/4-serrure-securisation-cambriolage.jpg" alt="" >
                                    <h3 class="sevices__title mt-3">Sécurisation cambriolage</h3>
                                    <p class="services__text">Si vous êtes victime d’un cambriolage, nous intervenons chez vous dans les meilleurs délais pour securiser votre porte. Nous pouvons trouver une solution temporaire pour que vous puissiez fermer votre porte. Par la suite nous pourrons réparer votre porte pour une totale sécurité.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="fifth-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 fifth-section-container">
                            <div class="contacts">
                                <p class="contacts__first-text">Si vous avez une urgence de serrurerie, appelez simplement notre standard disponible 24h/24</p>
                                <p class="contacts__second-text">DEVIS GRATUIT ET SANS ENGAGEMENT POUR UNE <span>INTERVENTION RAPIDE</span></p>
                                <div class="left-block__number d-grid col-4 m-auto mt-4 mb-2">
                                    <a class="left-block__link btn text-end pe-4" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                                </div>
                                <p class="contacts__small-text">APPEL GRATUIT NON SURTAXÉ</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!--Нижний колонтитул страницы-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 footer-container">
                        <div class="footer-box">
                            <div class="footer-left-block">
                                <p class="footer-left-block__text">De bonnes raisons de choisir nos services pour une intervention :</p>
                                <ul class="footer-left-block__ul">
                                    <li class="footer-left-block__li">RAPIDITÉ D'EXÉCUTION</li>
                                    <li class="footer-left-block__li">PRESTATIONS DE QUALITÉ</li>
                                    <li class="footer-left-block__li">DEVIS GRATUIT</li>
                                    <li class="footer-left-block__li">MATÉRIEL DE GRANDE MARQUE</li>
                                </ul>
                                <div class="left-block__number d-grid col-4 mt-4 mb-2">
                                    <a class="left-block__link btn text-end pe-4" href="<?= $phone_href ?>" ><?= $phone_name ?></a>
                                </div>
                                <p class="footer-left-block__small-text">APPEL GRATUIT NON SURTAXÉ</p>
                            </div>
                            <div class="footer-right-block">
                                <form id="jq_form" class="text-center mt-4">
                                    <h6 class="text-center colorh6">PRISE DE RENDEZ-VOUS<h6>
                                    <div class="my-3 px-3 ">
                                        <input class="form-control" placeholder="Nom" name="jq_name" type="text">
                                        <div id="jq_name" style="font-size:15px;color:red;padding-top:2px;display:none">Ceci est un champ obligatoire.</div>
                                    </div>
                                    <div class="my-3 px-3">
                                        <input class="form-control" placeholder="Téléphone" name="jq_phone" type="text">
                                        <div id="jq_phone" style="font-size:15px;color:red;padding-top:2px;display:none">Ceci est un champ obligatoire.</div>
                                    </div>
                                    <div class="my-3 px-3">
                                        <input class="form-control" placeholder="Rue" name="jq_street" type="text">
                                    </div>
                                    <div class="my-3 px-3">
                                        <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                    </div>
                                    <div class="my-3 px-3">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                    </div>
                                    <div class="my-3 px-3">
                                        <textarea rows="3" class="form-control" name="jq_text" placeholder="Décrivez votre problème..."></textarea>
                                        <div id="jq_text" style="font-size:15px;color:red;padding-top:2px;display:none">Ceci est un champ obligatoire.</div>
                                    </div>
                                    <input class="btn left-block__link col-12 width--button" type="submit" id="jq_submit" value="Suivant"> 
                                    <div id="jq_success" style="display:none">Merci pour votre message. Elle a été envoyée.</div>
                                </form> 
                            </div>
                        </div>
                    </div>                 
                </div>            
            </div>
        </footer>
        <!--Style-->     
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
</body>
</html>