<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        DB::table('Knowledges')->insert([
'slug'=>'creation-graphique',
'titleSf'=>'Création Graphique',
'img_catSf'=>'creation-graphique.png',
'ordre'=>1,
'accroche'=>'Des créations à votre image',
'img_sscat'=>'creation_graphique_pub.jpg',
'rightLeft'=>'right',
'paragraphe1'=>'Au coeur de toute stratégie de communication d’une entreprise, l’identité visuelle est le premier vecteur de son image, de ses valeurs et de son environnement. Elle doit être l’expression d’une marque ou de l’activité même de l’entreprise, qu’elle soit destinée à vendre un produit, un service, diffuser un message ou simplement rassembler autour de valeurs. Ce symbole doit être conçu pour s’appliquer sur tous les supports de communication nécessaires à sa diffusion.',
'paragraphe2'=>'',
'paragraphe3'=>'12'
        ]);

        DB::table('Knowledges')->insert([
'slug'=>'developpement-web',
'titleSf'=>'développement Web',
'img_catSf'=>'developpement-web.png',
'ordre'=>2,
'accroche'=>'Vos applications sur-mesure',
'img_sscat'=>'dev_web.png',
'rightLeft'=>'left',
'paragraphe1'=>'Nous vous offrons des solutions sur mesure ou clés en main pour vous guider dans toutes les étapes de développement de votre projet : expression des besoins, développement, migration de données, formation du personnel, déploiement et fonction support. Nos solutions sont adaptées à votre activité et évoluent avec la croisance de votre entreprise. Elles sont documentées et testées conformément aux normes applicables dans l\'industrie.',
'paragraphe2'=>'Nous sommes expert en développent PHP côté serveur. Nous utilisons le framework Laravel qui nous permet de gagner du temps et la satisfaction de nos clients ',

        ]);
        DB::table('Knowledges')->insert([
'slug'=>'gestion-projet',
'titleSf'=>'Gestion de Projet',
'img_catSf'=>'gestion-projet.png',
'ordre'=>5,
'accroche'=>'Prévoir pour savoir pour pouvoir',
'img_sscat'=>'gestion_projet_maw.png',
'rightLeft'=>'right',
'paragraphe1'=>'Gérer un projet ne s\'improvise pas. Dès lors que de nombreux intervenants doivent communiquer entre eux, que le projet s\'effectue sur plusieurs lieux géographiques, qu\'il atteint une taille importante, nos méthodes d\'organisation et de structuration de projets deviennent indispensables. Nos consultants interviennent alors, en assistance au démarrage du projet, et dans les phases de mise en place des systèmes de gestion de projets.',

        ]);

        DB::table('Knowledges')->insert([
'slug'=>'referencement',
'titleSf'=>'Référencement',
'img_catSf'=>'referencement.png',
'ordre'=>3,
'accroche'=>'Augmentez votre trafic',
'img_sscat'=>'ref_naturel_seo.png',
'rightLeft'=>'right',
'paragraphe1'=>'Améliorez le nombre de visites sur votre site web grâce à des campagnes internationales de liens sponsorisés. Datawords a établi des partenariats avec les principaux moteurs de recherche mondiaux : Google, Baidu, Yandex, Naver, Yahoo ! et Bing, pour vous permettre de cibler des internautes dans le monde entier. Que ce soit dans une logique de branding ou de ROI, la localisation de vos campagnes de référencement payant implique des adaptations à l’environnement linguistique et culturel visé mais également aux spécificités techniques de chaque moteur de recherche.',

        ]);

        DB::table('Knowledges')->insert([
'slug'=>'web-marketing',
'titleSf'=>'Web Marketing',
'img_catSf'=>'web-marketing.png',
'ordre'=>4,
'accroche'=>'L\'art de capter et convertir vos visiteurs',
'img_sscat'=>'web_market.jpg',
'rightLeft'=>'left',
'paragraphe1'=>'Nous vous accompagnons pour permettre à votre site d’obtenir plus de visites, de vendre plus et mieux ! Nous veillerons sur vos concurrents et analyserons chaque action réalisée afin d’optimiser votre ROI de façon constante grâce au paramétrage et au suivi approfondi de votre solution de web analytics !

 Après un audit de la visibilité, du trafic et de l\'environnement concurrentiel de votre site, notre équipe déterminera avec vous les actions prioritaires à mettre en place.',

        ]);

        DB::table('categories')->insert([ 'name' => 'Création Graphique', 'parent_category_id' => '0', 'url_name' => 'creation_graphique', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Création WEB', 'parent_category_id' => '0', 'url_name' => 'creation_web', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Backoffice', 'parent_category_id' => '0', 'url_name' => 'backoffice', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Logo', 'parent_category_id' => '1', 'url_name' => 'logo', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Carte de Visite', 'parent_category_id' => '1', 'url_name' => 'carte_de_visite', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Flyer', 'parent_category_id' => '1', 'url_name' => 'flyer', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Plaquette Comerciale', 'parent_category_id' => '1', 'url_name' => 'plaquette_comerciale', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Site vitrine', 'parent_category_id' => '2', 'url_name' => 'Site_vitrine', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'E commerce', 'parent_category_id' => '2', 'url_name' => 'e_commerce', 'active' => '1', ]);
        DB::table('categories')->insert([ 'name' => 'Plateforme', 'parent_category_id' => '2', 'url_name' => 'plateforme', 'active' => '1', ]);



DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => 'rciarlet@gmail.com', 'phone' => '640552446', 'phone2' => '', 'address' => '98 000 Monaco', 'responsable' => 'Romain ciarlet', 'created_at' => '42440,8789930556', 'updated_at' => '42440,8789930556', 'firm_name' => 'Samantha Cotonnec', 'firm_statut' => '', 'type' => 'pro', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => 'ollivier.sandrine@gmail.com', 'phone' => '613717150', 'phone2' => '', 'address' => 'Marseille', 'responsable' => 'Sandrine Ollivier', 'created_at' => '42441,4991898148', 'updated_at' => '42441,4991898148', 'firm_name' => 'Sandrine13', 'firm_statut' => 'en crÃ©ation', 'type' => 'pro', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => 'jleleu@flandrinfinance.fr', 'phone' => '06 13 76 51 50', 'phone2' => '', 'address' => '9 rue Adolphe Yvon', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '42445,5759722222', 'last_name' => '42445,5781134259', 'email' => 'Flandrin Finance', 'phone' => '', 'phone2' => 'pro', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => 'Fabrice', 'last_name' => 'GrÃ©goire', 'email' => 'siraiolos@gmail.com', 'phone' => '06 64 96 58 21', 'phone2' => '', 'address' => 'Nice Sophia Antipolis', 'responsable' => '', 'created_at' => '42479,4203240741', 'updated_at' => '42479,4203240741', 'firm_name' => '', 'firm_statut' => '', 'type' => 'particulier', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => 'schlomi@playologie.com', 'phone' => '+33 1 43 72 75 37', 'phone2' => 'skype : playologie', 'address' => '5, rue de la Plaine', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '42493,9789699074', 'last_name' => '42493,9789699074', 'email' => 'PICAFLOR SARL', 'phone' => 'SARL', 'phone2' => 'pro', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => 'Isnard', 'email' => 'malexisnard@gmail.com', 'phone' => '699794085', 'phone2' => '', 'address' => '66 chemin de Saint Christophe', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '42501,2851851852', 'email' => '42501,2851851852', 'phone' => '', 'phone2' => '', 'address' => 'particulier', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => 'targethnic2015', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => 'Jalil Bengana', 'last_name' => '42541,6463773148', 'email' => '42545,3203472222', 'phone' => 'Targethnic', 'phone2' => '', 'address' => 'pro', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => '', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => '', 'last_name' => '', 'email' => '', 'phone' => '', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => 'Arthes', 'firm_statut' => '', 'type' => '', ]);
DB::table('clients')->insert([ 'first_name' => 'Sylvia', 'last_name' => 'Romeo', 'email' => 'sylvia.romeo4@gmail.com', 'phone' => '07.60.38.04.86', 'phone2' => '', 'address' => '', 'responsable' => '', 'created_at' => '', 'updated_at' => '', 'firm_name' => 'Gescorgra', 'firm_statut' => 'sas', 'type' => '', ]);


DB::table('creations')->insert([ 'nom_client' => 'fotografosenlared.com', 'nom_client_simple' => 'fotografosenlared', 'url_site' => 'http://www.fotografosenlared.com/', 'category_id' => '9', 'brand_main' => 'Site Internet', 'brand_main_syntax' => 'site_internet', 'img_1' => 'img/projects/fotografosenlared.png', 'img_2' => 'img/projects/fotografosenlared1.png', 'img_3' => 'img/projects/fotografosenlared2.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'naturalia Pressing.com', 'nom_client_simple' => 'naturalia', 'url_site' => 'http://www.naturalia-pressing.com/', 'category_id' => '9', 'brand_main' => 'Site Internet', 'brand_main_syntax' => 'site_internet', 'img_1' => 'img/projects/naturaliapressing.png', 'img_2' => 'img/projects/naturaliapressing1.png', 'img_3' => 'img/projects/naturaliapressing2.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'lizapsj.com', 'nom_client_simple' => 'lizapsj', 'url_site' => 'http://www.lizapsj.com', 'category_id' => '9', 'brand_main' => 'Gestion de Projet', 'brand_main_syntax' => 'project', 'img_1' => 'img/projects/lizapsj.png', 'img_2' => 'img/projects/lizapsj1.png', 'img_3' => 'img/projects/lizapsj2.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'labo-hevea.com', 'nom_client_simple' => 'laboratoirehevea', 'url_site' => 'http://fr.labo-hevea.com/', 'category_id' => '9', 'brand_main' => 'Web marketiing', 'brand_main_syntax' => 'marketing', 'img_1' => 'img/projects/hevea.png', 'img_2' => 'img/projects/hevea1.png', 'img_3' => 'img/projects/hevea2.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'almi.es', 'nom_client_simple' => 'almibath', 'url_site' => 'http://www.almi.es/almi/index.php/fr/', 'category_id' => '9', 'brand_main' => 'Site Internet', 'brand_main_syntax' => 'site_internet', 'img_1' => 'img/projects/almi.png', 'img_2' => 'img/projects/almi1.png', 'img_3' => 'img/projects/almi2.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'magicgigi.com', 'nom_client_simple' => 'magicgigi', 'url_site' => 'http://www.magicgigi.com/blog/', 'category_id' => '9', 'brand_main' => 'Gestion de Projet', 'brand_main_syntax' => 'project', 'img_1' => 'img/projects/magicgigi.png', 'img_2' => 'img/projects/magicgigi1.png', 'img_3' => 'img/projects/magicgigi2.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'washing-service', 'nom_client_simple' => 'washingservice', 'url_site' => '', 'category_id' => '8', 'brand_main' => 'Charte graphique', 'brand_main_syntax' => 'graphique', 'img_1' => 'img/projects/washingservice.png', 'img_2' => 'img/projects/washingservice1.png', 'img_3' => 'img/projects/washingservice2.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'practigo.com', 'nom_client_simple' => 'practigo', 'url_site' => 'http://www.practigo.com', 'category_id' => '9', 'brand_main' => 'Site Internet', 'brand_main_syntax' => 'site_internet', 'img_1' => 'img/projects/practigo1.png', 'img_2' => 'img/projects/practigo2.png', 'img_3' => 'img/projects/practigo3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'mate-tee.de', 'nom_client_simple' => 'mate-tee', 'url_site' => 'http://www.mate-tee.de', 'category_id' => '9', 'brand_main' => 'Site Internet', 'brand_main_syntax' => 'site_internet', 'img_1' => 'img/projects/matetee1.png', 'img_2' => 'img/projects/matetee2.png', 'img_3' => 'img/projects/matetee3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'elconfidencial.com', 'nom_client_simple' => 'el confidencial', 'url_site' => 'http://www.elconfidencial.com', 'category_id' => '9', 'brand_main' => 'Site Internet', 'brand_main_syntax' => 'site_internet', 'img_1' => 'img/projects/elconfidencial1.png', 'img_2' => 'img/projects/elconfidencial2.png', 'img_3' => 'img/projects/elconfidencial3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'Immogroom.com', 'nom_client_simple' => 'Immogroom', 'url_site' => 'http://proprietaires.immogroom.com', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/immogroom1.png', 'img_2' => 'img/projects/immogroom2.png', 'img_3' => 'img/projects/immogroom3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'cfjjb.com', 'nom_client_simple' => 'cfjjb', 'url_site' => 'http://www.cfjjb.com', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/cfjjb1.png', 'img_2' => 'img/projects/cfjjb2.png', 'img_3' => 'img/projects/cfjjb3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'peinturedirecte.com', 'nom_client_simple' => 'peinturedirecte', 'url_site' => 'http://peinturediscount.organit.fr/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/peinturedirecte1.png', 'img_2' => 'img/projects/peinturedirecte2.png', 'img_3' => 'img/projects/peinturedirecte3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'contestime.com', 'nom_client_simple' => 'contestime', 'url_site' => 'http://www.contestime.com/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/contestime1.png', 'img_2' => 'img/projects/contestime2.png', 'img_3' => 'img/projects/contestime4.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'Gracie Barra Cote d\'azur', 'nom_client_simple' => 'gbca', 'url_site' => 'http://www.graciebarra-cotedazur.com/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/gbca1.png', 'img_2' => 'img/projects/gbca2.png', 'img_3' => 'img/projects/gbca3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'Franchesco Smalto', 'nom_client_simple' => 'smalto', 'url_site' => 'http://www.lesbleusbysmalto.com/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/smalto1.png', 'img_2' => 'img/projects/smalto2.png', 'img_3' => 'img/projects/smalto3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'Ursuliah', 'nom_client_simple' => 'ursuliah', 'url_site' => 'http://www.ursuliah.com/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/ursuliah1.png', 'img_2' => 'img/projects/ursuliah2.png', 'img_3' => 'img/projects/ursuliah3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'duoburner', 'nom_client_simple' => 'duoburner', 'url_site' => 'http://duoburner.organit.fr/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/duoburner1.png', 'img_2' => 'img/projects/duoburner2.png', 'img_3' => 'img/projects/duoburner3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'targethnic', 'nom_client_simple' => 'targethnic', 'url_site' => 'http://targethnic.com/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/target1.png', 'img_2' => 'img/projects/target2.png', 'img_3' => 'img/projects/target3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'plombier', 'nom_client_simple' => 'plombier', 'url_site' => 'https://artisanplombier-idf.fr/', 'category_id' => '9', 'brand_main' => 'site_internert', 'brand_main_syntax' => '', 'img_1' => 'img/projects/plombier1.png', 'img_2' => 'img/projects/plombier2.png', 'img_3' => 'img/projects/plombier3.png', ]);
DB::table('creations')->insert([ 'nom_client' => 'glob.cc', 'nom_client_simple' => 'glob', 'url_site' => 'https://www.glob.cc/', 'category_id' => '9', 'brand_main' => 'site_internet', 'brand_main_syntax' => '', 'img_1' => 'img/projects/glob1.png', 'img_2' => 'img/projects/glob2.png', 'img_3' => 'img/projects/glob3.png', ]);


DB::table('missions')->insert([ 'nom_mission' => 'Référencement', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Charte graphique', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Création logo', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Web design', ]);
DB::table('missions')->insert([ 'nom_mission' => 'html, cs3', ]);
DB::table('missions')->insert([ 'nom_mission' => 'jquery', ]);
DB::table('missions')->insert([ 'nom_mission' => 'php', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Backoffice', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Documents commerciaux', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Création d\'espace client', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Boutique online', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Intégration portail de payement', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Web Marketing', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Gestion de projet', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Hosting', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Login Facebook', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Système de paiement', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Responsive design', ]);
DB::table('missions')->insert([ 'nom_mission' => 'Compte utilisateur', ]);



DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '1', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '11', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '12', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '13', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '17', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '2', 'mission_id' => '19', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '3', 'mission_id' => '9', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '3', 'mission_id' => '13', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '3', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '3', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '1', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '9', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '13', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '4', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '1', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '11', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '12', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '5', 'mission_id' => '17', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '1', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '9', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '6', 'mission_id' => '13', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '1', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '3', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '13', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '7', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '8', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '8', 'mission_id' => '3', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '8', 'mission_id' => '9', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '7', 'main' => 'main', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '9', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '9', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '10', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '10', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '10', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '10', 'mission_id' => '7', 'main' => 'main', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '10', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '10', 'mission_id' => '11', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '11', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '11', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '11', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '11', 'mission_id' => '7', 'main' => 'main', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '11', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '11', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '11', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '12', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '12', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '12', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '12', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '12', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '12', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '17', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '13', 'mission_id' => '19', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '14', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '14', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '14', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '14', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '14', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '14', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '16', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '17', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '18', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '15', 'mission_id' => '19', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '16', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '16', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '16', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '16', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '16', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '16', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '16', 'mission_id' => '18', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '17', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '17', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '17', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '17', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '17', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '17', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '17', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '18', 'mission_id' => '18', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '3', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '11', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '19', 'mission_id' => '18', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '20', 'mission_id' => '4', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '20', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '20', 'mission_id' => '18', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '25', 'mission_id' => '2', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '25', 'mission_id' => '3', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '25', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '25', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '25', 'mission_id' => '15', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '25', 'mission_id' => '18', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '5', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '6', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '7', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '8', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '10', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '14', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '18', 'main' => '', ]);
DB::table('creation_mission')->insert([ 'creation_id' => '26', 'mission_id' => '19', 'main' => '', ]);







DB::table('users')->insert(['id'=>'1','first_name'=>'Nicolas','last_name'=>'Milville',"zoho_contact_id"=>'', 'zoho_login'=>'info@organit.fr','zoho_password'=>555,'client_id'=>'0','is_commercial'=>'0','comm_1'=>'0','comm_2'=>'0','phone'=>'','phone2'=>'','address'=>'','zip'=>'','city'=>'','country'=>'','email'=>'nmilville@gmail.com','password'=>bcrypt('nicolas'),'remember_token'=>'Y6hAFfld6Y','is_admin'=>'0','created_at'=>'','updated_at'=>'',]);




              /*
              **  roles
              */
              echo "roles//";
              DB::table('roles')->insert(['name' => 'admin', 'label'=>'the administrator', ]);
              DB::table('roles')->insert(['name' => 'secretary', 'label'=>'the secretary', ]);
              DB::table('roles')->insert(['name' => 'boss', 'label'=>'the Boss', ]);
              DB::table('roles')->insert(['name' => 'accountant', 'label'=>'the Accountant', ]);
              DB::table('roles')->insert(['name' => 'super_admin', 'label'=>'the Super Admin', ]);
              DB::table('roles')->insert(['name' => 'Analyst', 'label'=>'the Analyst', ]);


              /*
              **  role_users
              */

              echo "role_user//";
              DB::table('role_user')->insert(['role_id' => '1', 'user_id'=>'1', ]);
              DB::table('role_user')->insert(['role_id' => '2', 'user_id'=>'1', ]);
              DB::table('role_user')->insert(['role_id' => '3', 'user_id'=>'1', ]);
              DB::table('role_user')->insert(['role_id' => '4', 'user_id'=>'1', ]);
              DB::table('role_user')->insert(['role_id' => '5', 'user_id'=>'1', ]);
              DB::table('role_user')->insert(['role_id' => '6', 'user_id'=>'1', ]);


              /*
              **  permissions
              */
              echo "permissions//";
              DB::table('permissions')->insert(['name' => 'manage_settings', 'label'=>'can_manage settings', ]);
              DB::table('permissions')->insert(['name' => 'manage_larastrap', 'label'=>'can_access_settings', ]);


              /*
              **  permission_role
              */
              echo "permissions_role//";
              DB::table('permission_role')->insert(['permission_id' => '1', 'role_id'=>'1', ]);
              DB::table('permission_role')->insert(['permission_id' => '1', 'role_id'=>'4', ]);





/////                  devis                  /////

DB::table('devis')->insert(['id'=>'1','number'=>'flandrin - Middle','app_name'=>'middle','app_extention'=>'eu','esperence'=>'0','note'=>'','date'=>'0000-00-00','validated_by_contact'=>'0','client_id'=>'1','title'=>'','content'=>'','amount_HT'=>'0.00','amount_TTC'=>'0.00','is_registered'=>'0','gg_drive_link_devis'=>'','gg_drive_link_propal'=>'','source'=>'','url'=>'','nb_h_pp'=>'0.00','ct_st'=>'0.00','acompte_pourc'=>'0.00','propal_public_space'=>'','propal_title'=>'','propal_subtitle'=>'','propal_parcours_pdt'=>'','propal_presentation'=>'','propal_goals'=>'','propal_description'=>'','propal_features'=>'','propal_admin_space'=>'','propal_user_space'=>'','propal_super_admin_space'=>'','propal_technic_solution'=>'','propal_generalities'=>'','propal_payment_conditions'=>'','propal_delivery_terms'=>'','propal_option_hosting'=>'0','propal_summuary'=>'','created_at'=>'','updated_at'=>'',]);
DB::table('devis')->insert(['id'=>'2','number'=>'Arthes','app_name'=>'arthes','app_extention'=>'com','esperence'=>'6','note'=>'','date'=>'0000-00-00','validated_by_contact'=>'0','client_id'=>'18','title'=>'','content'=>'','amount_HT'=>'0.00','amount_TTC'=>'0.00','is_registered'=>'0','gg_drive_link_devis'=>'','gg_drive_link_propal'=>'','source'=>'','url'=>'','nb_h_pp'=>'0.00','ct_st'=>'0.00','acompte_pourc'=>'0.00','propal_public_space'=>'','propal_title'=>'','propal_subtitle'=>'','propal_parcours_pdt'=>'','propal_presentation'=>'','propal_goals'=>'','propal_description'=>'','propal_features'=>'','propal_admin_space'=>'','propal_user_space'=>'','propal_super_admin_space'=>'','propal_technic_solution'=>'','propal_generalities'=>'','propal_payment_conditions'=>'','propal_delivery_terms'=>'','propal_option_hosting'=>'0','propal_summuary'=>'','created_at'=>'','updated_at'=>'',]);
DB::table('devis')->insert(['id'=>'3','number'=>'Gescorgra','app_name'=>'Gescorgra','app_extention'=>'com','esperence'=>'7','note'=>'','date'=>'0000-00-00','validated_by_contact'=>'0','client_id'=>'19','title'=>'l‘édition de devis et l’administration de commandes','content'=>'','amount_HT'=>'8500.00','amount_TTC'=>'10200.00','is_registered'=>'0','gg_drive_link_devis'=>'','gg_drive_link_propal'=>'','source'=>'codeur','url'=>'https://www.codeur.com/projects/112099-creation-d-un-site-b2b-edition-de-devis','nb_h_pp'=>'0.00','ct_st'=>'0.00','acompte_pourc'=>'20.00','propal_public_space'=>'Création d\'un site vitrine dont le contenu (page qui sommes nous, contact, conditions générales...) est administrable dans le space Admin','propal_title'=>'Application d\'édition de devis','propal_subtitle'=>'','propal_parcours_pdt'=>'','propal_presentation'=>'','propal_goals'=>'','propal_description'=>'','propal_features'=>'','propal_admin_space'=>'','propal_user_space'=>'','propal_super_admin_space'=>'','propal_technic_solution'=>'','propal_generalities'=>'','propal_payment_conditions'=>'','propal_delivery_terms'=>'','propal_option_hosting'=>'0','propal_summuary'=>'','created_at'=>'','updated_at'=>'',]);
//DB::table('devis')->insert(['id'=>'2','number'=>'playologie','app_name'=>'playologie','app_extention'=>'com','esperence'=>'0','note'=>'','date'=>'0000-00-00','validated_by_contact'=>'0','client_id'=>'2','title'=>'','content'=>'','amount_HT'=>'0.00','amount_TTC'=>'0.00','is_registered'=>'0','gg_drive_link_devis'=>'','gg_drive_link_propal'=>'','source'=>'','url'=>'','nb_h_pp'=>'0.00','ct_st'=>'0.00','acompte_pourc'=>'0.00','propal_public_space'=>'','propal_title'=>'','propal_subtitle'=>'','propal_parcours_pdt'=>'','propal_presentation'=>'','propal_goals'=>'','propal_description'=>'','propal_features'=>'','propal_admin_space'=>'','propal_user_space'=>'','propal_super_admin_space'=>'','propal_technic_solution'=>'','propal_generalities'=>'','propal_payment_conditions'=>'','propal_delivery_terms'=>'','propal_option_hosting'=>'0','propal_summuary'=>'','created_at'=>'','updated_at'=>'',]);



/////                  themes                  /////

DB::table('themes')->insert(['id'=>'1','name'=>'default','type'=>'general','created_at'=>'','updated_at'=>'',]);
DB::table('themes')->insert(['id'=>'2','name'=>'inspina','type'=>'admin','created_at'=>'','updated_at'=>'',]);
DB::table('themes')->insert(['id'=>'3','name'=>'porto','type'=>'web','created_at'=>'','updated_at'=>'',]);
DB::table('themes')->insert(['id'=>'4','name'=>'bootstrapping','type'=>'general','created_at'=>'','updated_at'=>'',]);





/////                  namespaces                  /////

DB::table('namespaces')->insert(['id'=>'1','name'=>'Web','devis_id'=>'1','theme_id'=>'4','created_at'=>'','updated_at'=>'',]);
DB::table('namespaces')->insert(['id'=>'2','name'=>'Middle','devis_id'=>'1','theme_id'=>'4','created_at'=>'','updated_at'=>'',]);
DB::table('namespaces')->insert(['id'=>'3','name'=>'Crm','devis_id'=>'1','theme_id'=>'4','created_at'=>'','updated_at'=>'',]);


        /////                  field_types                  /////

        DB::table('field_types')->insert(['id'=>'1','name'=>'integer','slug'=>'integer','order'=>'1','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'2','name'=>'string','slug'=>'input text','order'=>'2','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'3','name'=>'password','slug'=>'password','order'=>'3','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'4','name'=>'email','slug'=>'email','order'=>'4','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'5','name'=>'datetime','slug'=>'datetime','order'=>'5','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'6','name'=>'time','slug'=>'time','order'=>'6','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'7','name'=>'text','slug'=>'text','order'=>'7','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'8','name'=>'mediumtext','slug'=>'mediumtext','order'=>'8','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'9','name'=>'longtext','slug'=>'longtext','order'=>'9','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'10','name'=>'binary','slug'=>'binary','order'=>'10','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'11','name'=>'decimal','slug'=>'decimal','order'=>'11','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'12','name'=>'bigint','slug'=>'bigint','order'=>'13','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'13','name'=>'boolean','slug'=>'boolean','order'=>'14','description'=>'','created_at'=>'','updated_at'=>'',]);
        DB::table('field_types')->insert(['id'=>'14','name'=>'date','slug'=>'date','order'=>'15','description'=>'','created_at'=>'','updated_at'=>'',]);

    }
}
