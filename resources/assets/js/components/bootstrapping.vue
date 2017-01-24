<style>

</style>



<template>




    slug_domain
    <input type="text" v-model="slug_domain">

    extension
    <input type="text" v-model="extension">


    <div class="well">
        Edition du domaine :
        <center>
            <h2>{{slug_domain}}.{{extension}}</h2>
        </center>
    </div>

    <!-- #v2# -->
    <div class=" alert alert-warning"><b>Pour le moment, les valeurs sont updatées via les 2 champs inputs -> reccuperer le domaine de l'objet devis. note:  on l'a dans vue, mais il faut ajouter le champ "domaine" (project.com)
        <p>
            il faudra extraire l'extention (.com) et mettre .app pour le local
        </p>

        note : en m$eme temps de la migration, ajouter le champ : server_id, pour savoir sur quel serveur on le place
    </div>


    <div class=" alert alert-info"><b>Pour modifier cette Page</b><br>organit > resources\assets\js\components\bootstrapping.vue</div>



    <div class="alert alert-info">--> acheter des noms de domaines standards ... pour MEL</div>










    <h1>Getting Started</h1>
    <p>

    </p>
    <ul>


        <li><input type="checkbox"> aller dans Code/</li>
        <li><input type="checkbox"> copier et renommer le dossier bootstrapping avec le nom du projet : <b>{{slug_domain}}</b></li>
        <li><input type="checkbox"> click droit sur le nouveau dossier > lancer commandr dans le dossier</li>
    </ul>






    <h2>Pas de ligne de commande</h2>

    <br><br></br>
    <hr>
    <h3>en parrallele:</h3>
    <br>

<ul>
        <li><input type="checkbox"> ouvrir le dosser project name sur atom editor</li>
        <li><input type="checkbox"> remplir le dossier .env</li>

    </ul>


    <br><br></br>
    <hr>
    <h3>en parrallele:</h3>
    <br>
<ul>
        <li><input type="checkbox"> mettre le logo dans public/img/logo.png</li>

    </ul>


    <br><br></br>
    <hr>
    <h3>en parrallele:</h3>
    <br>
<ul>
        <li><input type="checkbox"> Configuration du nom de domaine sur GAndi (ou celui du client)</li>

    </ul>


    <br><br></br>
    <hr>
    <h3>en parrallele:</h3>
    <br>
<ul>
        <li><input type="checkbox"> verifier le fichier de migrations pour ajouter des champs (optionnel)</li>

    </ul>




    <h2>Ligne de commande sans ssh</h2>



        <br><br></br>
        <hr>
        <h3>en parrallele:</h3>
        <br>

        <ul>
            <li>
                <input type="checkbox"> <i class="fa fa-console"><code></i>Homestead up</code>
            </li>
        </ul>


        <br><br></br>
        <hr>
        <h3>en parrallele:</h3>
        <br>
<ul>
            <li><input type="checkbox"> <i class="fa fa-console"><code>npm install</code></li>
            <li><input type="checkbox"> <i class="fa fa-console"><code>gulp</code> (pour tester)</li>

    </ul>

        <br><br></br>
        <hr>
        <h3>en parrallele:</h3>
        <br>

        <ul>
            <li><input type="checkbox">  github > creation repo > <a href="https://github.com/new">New repo</a> > nommer : {{slug_domain}}</li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>git init</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>git add .</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>git commit -m "first commit"</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>git remote add origin https://github.com/thibaultvanc/{{slug_domain}}.git</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>git push -u origin master</code></li>

            </ul>


        <br>
        <br>
        <br>
        <br>


        <h2>puis (apres github is finished )</h2>
        <h3>Forge installation</h5>

        <h5>en parralle</h5>
        <ul>
            <li><input type="checkbox"> choix du nom de domaine sur gandi ou demander au clien ses acces
                <p>
                    <label for="">production_domain</label><input v-model="production_domain"></li>

                    <label for="">production_domain</label><input v-model="exploitation_domain"></li>

                </p>
            <li><input type="checkbox"> choix du server distant sur forge

                <div><label for=""></label><input v-model="production_server"></div>
                <div><label for=""></label><input v-model="exploitation_server"></div>

            <li><input type="checkbox"> config du nom de domaine pour pointer sur le server forge</li>
        </ul>
        <br>
        <br>
        <br>



        <li><input type="checkbox"> creation domaine et choix server sur forge</li>

<br>
        <li><input type="checkbox"> choisir le repo github : <input v-model="github"></li>
        <li><input type="checkbox"> choix du nom de domaine <input v-model="production_domain"></li>

<br>

        <li><input type="checkbox"> choisir le repo github</li>
        <li><input type="checkbox"> activer le mode auto publish</li>
        <li><input type="checkbox"> changer le script d'excecution -> php artisan migrate:refresh --seed</li>
        <li><input type="checkbox"> editer fichier environnement</li>

<br>

        <h5>se connecter en ssh sur FORGE pour creer la BDD</h5>
        <ul>
            <li><input type="checkbox">  <i class="fa fa-console"><code>ssh forge@104.131.35.207 -i ~/.ssh/id_rsa</code>    (ici elvis)</li>
            <li><input type="checkbox">  <i class="fa fa-console"> creation bdd SUR MYSQL <code>mysql -u forge -p</code>     (password : 6Jw1GCXLYadyTSOh73NJ)</li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>CREATE DATABASE IF NOT EXISTS {{slug_domain}} ;</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>show databases;</code></li>
            </ul>
<br>

        <h5>installation ssl</h5>
    <ul>
        <li><input type="checkbox"> installation ssl</li>
        </ul>





        <br><br></br>
        <hr>
        <h3>en parrallele:</h3>
        <br>
        <ul>
            <li><input type="checkbox"> homestead yaml (placer en debut sinon, conflit avec mlm-valley)
                <pre>
                    - map: {{slug_domain}}.{{extension}}
                    to: /home/vagrant/Code/{{slug_domain}}/public
                </pre>
            </li>
            <li><input type="checkbox"> hosts
                <pre>192.168.10.10    {{slug_domain}}.{{extension}}</pre>
            </li>

            <li><input type="checkbox"> <i class="fa fa-console"><code> homestead provision</code></li>

        </ul>





        <h2>Ligne de commande <div class="label label-info">SSH</div></h2>


        <br><br></br>
        <hr>
        <h3>en parrallele:</h3>
        <br>
        <h5>composer</h5>
        <ul>
            <li><input type="checkbox">  <i class="fa fa-console"><code> homestead ssh</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code> cd Code/{{slug_domain}}</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code> composer install</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code> composer dump-autoload -o</code></li>

            </ul>

        <br><br></br>
        <hr>
        <h3>en parrallele:</h3>
        <br>
        <h5>creation de la BDD Locale</h5>
        <ul>
            <li><input type="checkbox"> creation bdd SUR MYSQL     <i class="fa fa-console"><code> mysql -u homestead -p </code>     (password : secret)</li>
            <li><input type="checkbox"> <i class="fa fa-console"><code>CREATE DATABASE IF NOT EXISTS {{slug_domain}} ;</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code> show databases;</code></li>
            <li><input type="checkbox">_ use {{slug_domain}};    ///pui select * ... (optionnel)</li>

            </ul>

            <p>ctrl + c (leave mysql)</p>






        <h3>Migrations</h3>
        ----------------------------
        <ul>
            <li><input type="checkbox">  <i class="fa fa-console"><code>php artisan migrate</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>php artisan migrate:refresh --seed</code></li>
            <li><input type="checkbox">  <i class="fa fa-console"><code>php artisan vendor:publish</code></li>
            </ul>





        <div class="well">

                <center>
                    <h5>TESTER {{slug_domain}}.{{extension}} dans le navigateur</h5>
                </center>


        </div>



<ul>


            <li><input type="checkbox">lister DES MODels
            <p>
                <!-- #v2# -->
                <i>V2 : connexion avec les tables via vue.js</i>
            </p>
            </li>
            <li><input type="checkbox">Lister les champs de chaque Model</li>

            <!-- #v2# -->
            <li><input type="checkbox">Dermander par mail au client la liste des champs qu'il veut (v2 auto)</li>

            <li><input type="checkbox">Définir les relations entre les models</li>

            <li><input type="checkbox">extraire le crud ? </li>

            <!-- #v2# -->
            <li><input type="checkbox">cREATION Du MVC + migrations</li>

            <!-- #v2# -->
            <li><input type="checkbox">creation des seeds / faker</li>

            <li><input type="checkbox">choix des themes pour chaque space</li>
    </ul>






        <h2>mise en prod exploitation</h2>

        <h5>forge</h5>
<ul>
            <li><input type="checkbox"> changer le script d'excecution -> php artisan migrate:refresh --seed  >>>>> php artisan migrate --force</li>

            <li><input type="checkbox"> Changer les codes stripes ou autre dans les variables environnement</li>

    </ul>


</template>





<script>


export default {

    props :{
        devis:{
            required: false,
            type:Object,
        }
    },


    ready () {
        console.log('messages component ready');
        //this.fetchMessages()

    },

    data(){
        return {
            slug_domain:'',
            extension:'',

            production_server:'',
            exploitation_server:'',

            production_domain:'',
            exploitation_domain:''


        };
    },

    filters:{


    },

    methods: {

        /*
        fetchMessages:function(){
        this.$http.get('/api/messages?contest'+this.contest).then(function (response) {
        this.messageList = response.data

    }, function (response) {
    // error callback
});

},
*/
},
computed:{


}

}


</script>
