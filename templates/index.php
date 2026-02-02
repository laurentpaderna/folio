<?php

header('Cache-Control: no-cache');
header('Pragma: no-cache');

// Load our autoloader
require_once __DIR__."/../vendor/autoload.php";

// Specify our Twig templates location
$loader = new \Twig\Loader\FilesystemLoader(__DIR__."/");
$twig = new \Twig\Environment($loader, [
    "debug" => true
]);
$twig->addExtension(new \Twig\Extension\DebugExtension());
$template = $twig->load("index.html.twig");

// Set content list
$workList = array(
    "aircaraibes",
    "frenchbee",
    "nouvellecaledonie",
    "vinci",
    "leclerc",
    "oenobiol",
    "mium",
    "btp",
    "foncia",
    "bouygues",
    "bodet",
    "sage",
    "quick",
    "aderma",
    "bobbi",
    "clinique",
    "darphin",
    "lamer",
    "mac"
);
$skillList = array(
    "html5",
    "css3",
    "javascript",
    "jquery",
    "sass",
    "less",
    "twig",
    "liquid",
    "illustrator",
    "drupal",
    "wordpress",
    "shopify",
    "php"
);
$awardList = array(
    "arneo",
    "venise",
    "blab",
    "ccm",
    "doranco"
);
$workItems = array(
    "aircaraibes" => array(
        "pageTitle" => "aircaraibes",
        "title" => "AIRCARAIBES",
        "linkTitle" => "VOIR LE SITE",
        "linkUrl" => "https://www.aircaraibes.com",
        "skill1" => "jquery",
        "skill2" => "css3",
        "skill3" => "drupal",
        "paragraph1" => "J'ai travaillé sur l'ancienne version de ce site afin que certaines pages soient adaptatives, et ajouté des menus déroulants sur la version mobile en définissant des plugins jQuery.",
        "paragraph2" => "J'ai collaboré à la refonte du site, en mettant en place l'architecture front-end, ainsi que la compilation des fichiers css et javascript via Gulp. J'ai aussi mis en place le formulaire de réservation pour les billets circuits, en étendant la classe javascript gérant les règles métier de cette application."
    ),
    "frenchbee" => array(
        "pageTitle" => "frenchbee",
        "title" => "FRENCHBEE",
        "linkTitle" => "VOIR LE SITE",
        "linkUrl" => "https://www.frenchbee.com",
        "skill1" => "illustrator",
        "skill2" => "css3",
        "skill3" => "less",
        "paragraph1" => "J'ai travaillé sur ce site afin de customiser le tunnel de réservation, au moyen de styles en css.",
        "paragraph2" => "J'ai aussi customisé les icônes dans ce même tunnel, en les dessinant sous illustrator, et en les exportant au format png."
    ),
    "nouvelleCaledonie" => array(
        "pageTitle" => "nouvellecaledonie",
        "title" => "NOUVELLE-CALÉDONIE",
        "linkTitle" => "VOIR LE SITE",
        "linkUrl" => "https://www.nouvellecaledonie.travel",
        "skill1" => "javascript",
        "skill2" => "css3",
        "skill3" => "illustrator",
        "paragraph1" => "J'ai travaillé sur ce site afin de mettre en place l'annuaire des professionnels, ainsi que la page des offres locales.",
        "paragraph2" => "J'ai aussi travaillé sur la refonte de la page d'accueil, où il a fallu notamment afficher la température et l'heure par rapport à la géolocalisation de l'utilisateur."
    ),
    "vinciAutoroutes" => array(
        "pageTitle" => "vinci",
        "title" => "VINCI AUTOROUTES",
        "linkTitle" => "VOIR LE SITE",
        "linkUrl" => "https://corporate.vinci-autoroutes.com/fr",
        "skill1" => "jquery",
        "skill2" => "twig",
        "skill3" => "drupal",
        "paragraph1" => "Je me suis occupé de mettre en place les différentes pages et modules de ce site, selon la charte graphique définie.",
        "paragraph2" => "Pour définir les pages, j'ai utilisé twig pour la génération des fichiers html, avec le Drupal 8 comme gestionnaire de contenu.",
        "paragraph3" => "Les modules du site étant administrables, la stylisation des éléments a été définie pour s'adapter à tous les possibles cas de figure."
    ),
    "leclerc" => array(
        "pageTitle" => "leclerc",
        "title" => "LE MOUVEMENT LECLERC",
        "linkTitle" => "VOIR LE SITE",
        "linkUrl" => "https://www.mouvement.leclerc/",
        "skill1" => "javascript",
        "skill2" => "twig",
        "skill3" => "html5",
        "paragraph1" => "J'ai utilisé la méthodologie du design atomique pour intégrer les éléments constituant les pages du site ( boutons, liens, lecteur... ).",
        "paragraph2" => "J'ai défini des classes javascript, afin de mettre en place la navigation et la lecture de fichiers audios."
    ),
    "mium" => array(
        "pageTitle" => "mium",
        "title" => "MIUM LAB ( Ex Les miraculeux )",
        "linkTitle" => "VOIR LE SITE",
        "linkUrl" => "https://www.miumlab.com/",
        "skill1" => "liquid",
        "skill2" => "javascript",
        "skill3" => "html5",
        "paragraph1" => "J'ai travaillé sur le formulaire permettant de créer son propre pack de produits.",
        "paragraph2" => "J'ai défini les classes javascript nécessaires pour la gestion de la quantité et des prix de chaque produit, et apporté mon expertise sur l'expérience utilisateur en version mobile.",
        "paragraph3" => "J'ai aussi optimisé les templates, fait avec le language Liquid afin que l'organisation du contenu soit facilement maintenable et évolutive."
    ),
    "btp" => array(
        "pageTitle" => "btp",
        "title" => "Observatoire des métiers du BTP",
        "linkTitle" => "VOIR LA PAGE",
        "linkUrl" => "assets/pages/landing-btp/index.html",
        "skill1" => "wordpress",
        "skill2" => "css3",
        "skill3" => "illustrator",
        "paragraph1" => "J'ai travaillé sur une landing page mettant en avant les différents modes de rénovation énergétiques.",
        "paragraph2" => "À partir des spécifications du client, j'ai mis en place les animations en css3 en éditant le fichier svg pour segmenter les différentes parties de la présentation."
    ),
    "oenobiol" => array(
        "pageTitle" => "oenobiol",
        "title" => "OENOBIOL",
        "linkTitle" => "VOIR LE SITE",
        "linkUrl" => "http://www.journaldesfemmes.com/oenobiol-controle-fringales/",
        "skill1" => "sass",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cette landing page en utilisant les outils de développement conçu par l'équipe avec laquelle je travaillais, en l'occurence leur framework css propriétaire."
    ),
    "foncia" => array(
        "pageTitle" => "foncia",
        "title" => "FONCIA",
        "linkTitle" => "VOIR L'E-MAIL",
        "linkUrl" => "assets/pages/mail-foncia/index.html",
        "skill1" => "css3",
        "skill2" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en utilisant la méthode dite hybride, qui permet d'obtenir une mise en page adaptative sans points de rupture.",
        "paragraph2" => "Je valide ces intégrations en interne grâce à différents tests effectués avec EmailOnAcid."
    ),
    "bouygues" => array(
        "pageTitle" => "bouygues",
        "title" => "BOUYGUES",
        "linkTitle" => "VOIR LA PAGE",
        "linkUrl" => "assets/pages/landing-bouygues/index.html",
        "skill1" => "css3",
        "skill2" => "html5",
        "skill3" => "sass",
        "paragraph1" => "J'ai intégré cette landing page en utilisant les outils de développement conçu par l'équipe avec laquelle je travaillais, en l'occurence leur framework css propriétaire."
    ),
    "bodet" => array(
        "pageTitle" => "bodet",
        "title" => "BODET SOFTWARE",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-bodet/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en utilisant la méthode dite hybride, qui permet d'obtenir une mise en page adaptative sans points de rupture.",
        "paragraph2" => "Je valide ces intégrations en interne grâce à différents tests effectués avec EmailOnAcid."
    ),
    "sage" => array(
        "pageTitle" => "sage",
        "title" => "SAGE ONLINE",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-sage/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en utilisant la méthode dite hybride, qui permet d'obtenir une mise en page adaptative sans points de rupture.",
        "paragraph2" => "Je valide ces intégrations en interne grâce à différents tests effectués avec EmailOnAcid."
    ),
    "aderma" => array(
        "pageTitle" => "aderma",
        "title" => "ADERMA",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-aderma/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en utilisant le framework <strong>MJML</strong> pour générer la structure html.",
        "paragraph2" => "J'ai veillé à respecter les recommendations du framework pour maximiser la compatibilité avec les différents clients mails.",
        "paragraph3" => "Je valide ces intégrations en interne grâce à différents tests effectués avec EmailOnAcid."
    ),
    "quick" => array(
        "pageTitle" => "quick",
        "title" => "QUICK",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-quick/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en utilisant le framework <strong>MJML</strong> pour générer la structure html.",
        "paragraph2" => "J'ai veillé à respecter les recommendations du framework pour maximiser la compatibilité avec les différents clients mails."
    ),
    "bobbi" => array(
        "pageTitle" => "bobbi",
        "title" => "BOBBI BROWN",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-bobbi/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en respectant les prérequis du client concernant l'adaptation du contenu à la version mobile."
    ),
    "clinique" => array(
        "pageTitle" => "clinique",
        "title" => "CLINIQUE",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-clinique/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en respectant les prérequis du client concernant l'adaptation du contenu à la version mobile."
    ),
    "darphin" => array(
        "pageTitle" => "darphin",
        "title" => "DARPHIN PARIS",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-darphin/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en respectant les prérequis du client concernant l'adaptation du contenu à la version mobile."
    ),
    "lamer" => array(
        "pageTitle" => "lamer",
        "title" => "LA MER",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-lamer/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en respectant les prérequis du client concernant l'adaptation du contenu à la version mobile."
    ),
    "mac" => array(
        "pageTitle" => "mac",
        "title" => "M·A·C",
        "linkTitle" => "VOIR L'EMAIL",
        "linkUrl" => "assets/pages/mail-mac/index.html",
        "skill2" => "css3",
        "skill3" => "html5",
        "paragraph1" => "J'ai intégré cet e-mail html en respectant les prérequis du client concernant l'adaptation du contenu à la version mobile."
    )
);
$skillItems = array(
    "html5" => array(
        "skillTitle" => "html5",
        "skillPercent" => "90",
        "project1" => "aircaraibes",
        "project2" => "vinci",
        "project3" => "nouvellecaledonie",
        "paragraph1" => "J'utilise ce langage pour de déterminer et hiérarchiser le contenu sur les pages où je suis intervenu.",
        "paragraph2" => "Ma principale préoccupation est de mettre en place une structure aussi sémantique que possible, afin de faciliter le référencement de la page."
    ),
    "css3" => array(
        "skillTitle" => "css3",
        "skillPercent" => "90",
        "project1" => "bouygues",
        "project2" => "oenobiol",
        "project3" => "leclerc",
        "paragraph1" => "Quelque soit le contexte, j'emploie les différentes propriétés à ma disposition en me souciant d'obtenir un résultat optimal sur les navigateurs web, mais aussi en exploitant au maximum la structure html pour définir les fonctionnalités de l'interface utilisateur.",
        "paragraph2" => "Cette approche me permet d'utiliser javascript seulement quand il est absolument nécessaire de le faire."
    ),
    "javascript" => array(
        "skillTitle" => "javascript",
        "skillPercent" => "70",
        "project1" => "aircaraibes",
        "project2" => "mium",
        "project3" => "leclerc",
        "paragraph1" => "J'utilise ce langage pour définir les fonctionnalités sur l'interface utilisateur.",
        "paragraph2" => "J'ai employé ce langage sur l'interface du Google Tag Manager, pour mettre en place des fonctions customisées, principalement pour la récupération et le formatage de données."
    ),
    "jquery" => array(
        "skillTitle" => "jquery",
        "skillPercent" => "80",
        "project1" => "aircaraibes",
        "project2" => "mium",
        "project3" => "vinci",
        "paragraph1" => "J'utilise cette librairie pour définir les fonctionnalités sur l'interface utilisateur.",
        "paragraph2" => "Je définis les différents modules dont j'ai besoin en exploitant la syntaxe disponible, particulièrement pour enchaîner les modules de manière logique en fonction du comportement que j'ai besoin de mettre en place."
    ),
    "wordpress" => array(
        "skillTitle" => "wordpress",
        "skillPercent" => "60",
        "project1" => "blab",
        "project2" => "btp",
        "paragraph1" => "J'ai utilisé ce CMS pour définir de nouveaux contenus sur les pages où c'était nécessaire.",
        "paragraph2" => "Je suis intervenu sur la partie front-end de ce système de gestion de contenus."
    ),
    "drupal" => array(
        "skillTitle" => "drupal",
        "skillPercent" => "60",
        "project1" => "nouvellecaledonie",
        "project2" => "vinci",
        "project3" => "twig",
        "paragraph1" => "J'ai utilisé ce CMS pour définir de nouveaux contenus sur les pages où c'était nécessaire.",
        "paragraph2" => "J'ai utilisé le language twig, et l'héritage des templates pour hiérarchiser les différents que j'avais à intégrer.",
        "paragraph3" => "Je suis intervenu sur la partie front-end de ce système de gestion de contenus."
    ),
    "shopify" => array(
        "skillTitle" => "shopify",
        "skillPercent" => "60",
        "project1" => "mium",
        "paragraph1" => "J'ai utilisé ce CMS pour définir de nouveaux contenus sur les pages où c'était nécessaire.",
        "paragraph2" => "J'ai utilisé le lanaguage liquid pour définir des méthodes servant à formater les données issues de la base de donnée.",
        "paragraph3" => "Je suis intervenu sur la partie front-end de ce système de gestion de contenus."
    ),
    "sass" => array(
        "skillTitle" => "sass",
        "skillPercent" => "90",
        "project1" => "oenobiol",
        "project2" => "bouygues",
        "paragraph1" => "J'utilise ce langage pour dynamiser l'écriture des feuilles de style que je dois mettre en place.",
        "paragraph2" => "Je m'assure de générer un code qui soit lisible, où les propriétés ne se répètent pas, pour obtenir les meilleurs performances possible."
    ),
    "less" => array(
        "skillTitle" => "less",
        "skillPercent" => "70",
        "project1" => "frenchbee",
        "project2" => "aircaraibes",
        "paragraph1" => "J'utilise ce langage pour dynamiser l'écriture des feuilles de style que je dois mettre en place.",
        "paragraph2" => "Je m'assure de générer un code qui soit lisible, où les propriétés ne se répètent pas, pour obtenir les meilleurs performances possible."
    ),
    "twig" => array(
        "skillTitle" => "twig",
        "skillPercent" => "70",
        "project1" => "nouvellecaledonie",
        "project2" => "aircaraibes",
        "project3" => "vinci",
        "paragraph1" => "J'utilise ce moteur de templates pour définir le contenu sur les pages que je dois créer.",
        "paragraph2" => "Je hiérarchise les différentes parties du contenu que je dois définir grâce au système d'héritage.",
        "paragraph3" => "Je génère aussi le contenu nécessaire en employant les fonctions de ce moteur, mais aussi celles disponibles lorsqu'on travaille dans le contexte de Drupal 8."
    ),
    "liquid" => array(
        "skillTitle" => "liquid",
        "skillPercent" => "70",
        "project1" => "mium",
        "paragraph1" => "J'utilise ce moteur de templates pour définir le contenu sur les pages que je dois créer.",
        "paragraph2" => "J'ai défini différentes fonctions pour formater les données et m'assurer que le rendu soit conforme aux attentes du client.",
    ),
    "php" => array(
        "skillTitle" => "php",
        "skillPercent" => "50",
        "project1" => "btp",
        "paragraph1" => "J'utilise ce langage pour déterminer les variables qui serviront à placer le contenu sur la page web.",
        "paragraph2" => "Les cas que j'ai eu à traiter ont nécessité un usage basique, où j'optimisais le script qui était déjà écrit.",
    ),
    "illustrator" => array(
        "skillTitle" => "illustrator",
        "skillPercent" => "70",
        "project1" => "frenchbee",
        "project2" => "nouvellecaledonie",
        "paragraph1" => "J'utilise ce logiciel pour créer et optimiser des svg, dans le but de créer des polices d'icônes customisées grâce à un automatiseur de tâches, Gulp en l'occurence.",
        "paragraph2" => "J'optimise aussi les fichiers svg dont dont l'affichage est anormal."
    )
);
$awardItems = array(
    "arneo" => array(
        "awardTitle" => "arneo",
        "awardSkill1" => "mium",
        "awardSkill2" => "mac",
        "awardSkill3" => "leclerc",
        "title" => "ARNEO GROUP",
        "timeItem" => "Septembre 2020 - mai 2025",
        "jobItem" => "développeur front-end",
        "locationItem" => "Boulogne Billancourt",
        "linkUrl" => "https://arneogroup.com/",
        "paragraph1" => "Le groupe <strong>ARNEO</strong> ayant fusionné avec le groupe <strong>VENISE</strong>, j'ai rejoint cette nouvelle entité.",
        "paragraph2" => "Mon rôle était de m'occuper de la partie front-end sur les différents projets."
    ),
    "venise" => array(
        "awardTitle" => "venise",
        "awardSkill1" => "aderma",
        "awardSkill2" => "quick",
        "awardSkill3" => "frenchbee",
        "title" => "VENISE",
        "timeItem" => "Décembre 2019 - Septembre 2020",
        "jobItem" => "développeur front-end",
        "locationItem" => "Boulogne Billancourt",
        "linkUrl" => "https://www.venisegroup.com/",
        "paragraph1" => "J'étais chargé de toutes les tâches concernant la partie front-end.",
        "paragraph2" => "J'intégrais des pages web, et j'apportais mon expertise sur d'autres sites dont on devait assurer la maintenance."
    ),
    "blab" => array(
        "awardTitle" => "blab",
        "awardSkill1" => "aircaraibes",
        "awardSkill2" => "nouvellecaledonie",
        "awardSkill3" => "vinci",
        "title" => "BUSINESS LAB",
        "timeItem" => "Février 2017 - Décembre 2019",
        "jobItem" => "développeur front-end",
        "locationItem" => "Nanterre",
        "paragraph1" => "J'ai été engagé dans cette société après une mission de 3 mois sur un projet majeur, en l'occurence Vinci autoroutes.",
        "paragraph2" => "J'étais chargé de toutes les tâches concernant la partie front-end, ce qui englobais l'intégration de pages web et des comportements utilisateurs sur l'interface, et d'emails html responsives."
    ),
    "ccm" => array(
        "awardTitle" => "ccm",
        "awardSkill1" => "bouygues",
        "awardSkill2" => "foncia",
        "awardSkill3" => "sage",
        "title" => "CCM BENCHMARK GROUP",
        "timeItem" => "2016 - 2017",
        "jobItem" => "intégrateur freelance",
        "locationItem" => "Nanterre",
        "linkUrl" => "https://www.ccmbenchmark.com",
        "paragraph1" => "J'ai travaillé dans cette société en tant qu'intégrateur freelance.",
        "paragraph2" => "J'étais chargé d'intégrer des emails html et des landing pages responsives."
    ),
    "doranco" => array(
        "awardTitle" => "doranco",
        "awardSkill1" => "html5",
        "awardSkill2" => "css3",
        "awardSkill3" => "javascript",
        "title" => "DORANCO ESPACE MULTIMEDIA",
        "timeItem" => "2014 - 2015",
        "jobItem" => "étudiant en formation de développeur multimédia",
        "locationItem" => "Bagnolet",
        "linkUrl" => "https://www.doranco.fr",
        "paragraph1" => "C'est dans cet organisme que l'on m'a enseigné les bases des différents languages que je pratique aujourd'hui, grâce à une formation sur 6 mois.",
        "paragraph2" => "Nous avons d'abord eu 3 mois et demi de cours génériques, puis j'ai été en formation en alternance pendant 3 mois."
    )
);

// render data to template, set error message if error
try {
    echo $template->render(array(
        "workList" => $workList,
        "skillList" => $skillList,
        "awardList" => $awardList,
        "workItems" => $workItems,
        "skillItems" => $skillItems,
        "awardItems" => $awardItems
    ));
} catch (\Exception $e) {
    echo $e->getMessage();
}
