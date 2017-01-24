

<!DOCTYPE html>
<html>
<head>
    <!--<title>Devil Escort</title>-->


    <link rel="shortcut icon" href="http://devil.app/logo.png">
    <style>
        @page { margin: 100px 50px;  }


        .page-header{
            margin-bottom: 25px !important;
        }
        .page-header h2{
            font-size: 19px;
        }

        .container {
         display: table;
         text-align: center;
         vertical-align: middle;

     }
     .landing {
         text-align: center;
         display: inline-block;
         background: url('{{ asset('img/slides/courbe2.png') }}') no-repeat;

     }

     .title {
         font-size: 66px;
         font-weight: 100;
         font-family: "Helvetica";
     }
     .sub-title {
         color: #4285F4;
         font-size: 39px;
     }



     #content{
        background-color: white;
    }



    .page-title:after{
       content: url('{{ asset('img/logo_organit.png') }}');
   }


   table.page-header{
    width: 100%; border: none
}

table.page-header tr td:nth-child(1){
    background-color: #B4A9A5;
    color: #FFFFFF;
    padding-left: 15px;
    width: 70%; 
}
table.page-header tr td:nth-child(2){
    background-color: #FFFFFF;
    width: 30%; text-align:right
}



.signIt{
    border:solid 1 px grey;
    padding: 6px;
}



.page-break {
    page-break-after: always;
}







#header { position: fixed; left: 0px; top: -100px; right: 0px; height: 50px; background-color: white; text-align: center;border-bottom:solid 1px grey }
#footer { position: fixed; left: 0px; bottom: -100px; right: 0px; height: 90px; background-color: white; border-top:solid 1px grey; color:grey; }
#footer .page-number:after { content: counter(page); }


</style>
</head>
<body>



    <center>
        <h3 style="color:grey; margin-top:100px">Proposition Commerciale</h3>
    </center>
    <br><br><br><br><br>
    <div class="container">
        <div class="landing">
            <div class="title">{{$devis->propal_title}}</div>
            <hr>
            <h2 class="sub-title">{{$devis->propal_subtitle}}</h2>
            <div style="margin-top: 150px; text-align: right">
                by   
                <img src="{{ asset('img/logo_organit.png') }}" >
            </div>

        </div>
        <div id="footer">

            <p class="">
                Pour {{($devis->client->first_name)? $devis->client->first_name.' -' : ''}} {{($devis->client->last_name)? $devis->client->last_name.' -' : ''}} {{$devis->client->email}}<br>
                {{($devis->client->firm_name)? 'Société :'.($devis->client->firm_name) : '' }}
            </p>
        </div>

    </div>


    <p class="page-break"></p>

    <div id="header">
        <h4>{{$devis->propal_title}} - {{$devis->propal_subtitle}}</h4>
    </div>
    <div id="footer">
        <table style="width: 100%">
            <tr>
                <td style="width: 80%">
                    Proposition Commerciale : <b>{{$devis->propal_title}}</b><br>
                    SARL OrganiT au capital de 15 000 €<br>
                    SIRET : 794 593 996 00018<br>
                    info@organit.fr - 07 86 38 02 85 - www.organit.fr<br><br>
                </td>
                <td style="width: 20%; text-align: right" >
                    <img src="{{asset('img/logo_organit.png')}}" style="height: 30px" ><br>
                    Le {{date('d-m-Y')}}<br>
                    <span class="page">Page <span class="page-number"></span></span>
                </td>
            </tr>
        </table>
        
    </div>
    <div id="content">


        <table class="page-header"><tr ><td><h2>OrganiT, la petite agence qui a TOUT d'une grande !</h2></td> <td ><img src="{{asset('img/logo_organit.png')}}" style="height: 60px" ></td></tr></table> 
            @include('admin/devis/propal._presentation_organit')
        <p class="page-break"></p> 
        <!------------------------------------------> 



        @if($devis->propal_parcours_pdt || $devis->propal_presentation ||  $devis->propal_description)
        <table class="page-header"><tr ><td><h2>Présentation</h2></td> <td ><img src="http://su.edu.krd/userFiles/aram/img/icon_company.png" style="height: 60px" ></td></tr></table>

            @if($devis->propal_parcours_pdt)
            <h3>Présentation du contexte</h3>
            {!!$devis->propal_parcours_pdt !!}
            @endif

            @if($devis->propal_presentation)
            <h3>Présentation générale</h3>
            {!!$devis->propal_presentation !!}
            @endif

            @if($devis->propal_description)
            <h3>Description</h3>
            {!!$devis->propal_description !!}
            @endif



        <p class="page-break"></p>
        <!------------------------------------------>
        @endif()







        @if( $devis->propal_description)
        <table class="page-header"><tr ><td><h2>Objectif</h2></td> <td ><img src="{{asset('img/chef-projet-web-goals.jpg')}}" style="height: 60px" ></td></tr></table>

            @if($devis->propal_goals)
            {!!$devis->propal_goals !!}
            @endif



        <p class="page-break"></p>
        <!------------------------------------------>
        @endif()






        @if($devis->propal_features || $devis->propal_public_space|| $devis->propal_admin_space || $devis->propal_user_space || $devis->propal_super_admin_space)
            <table class="page-header"><tr ><td><h2>Les différents "espaces" et fonctionnalités</h2></td> <td ><img src="{{asset('img/services/workflow-automatisation-des-taches.png')}}" style="height: 60px" ></td></tr></table>

            <br><br>

            @if($devis->propal_features)
                <h3>Fonctionnalités principales</h3>
                {!!$devis->propal_features !!}
                <p class="page-break"></p>
                <!------------------------------------------>  
            @endif

            @if($devis->propal_public_space)
                <h3><span style="color: green"></span> L'espace public</h3>
                {!!$devis->propal_public_space !!}
                <p class="page-break"></p>
                <!------------------------------------------>  
            @endif

            @if($devis->propal_user_space)
                <h3>La zone membre (utilisateur)</h3>
                {!!$devis->propal_user_space !!}
                <p class="page-break"></p>
                <!------------------------------------------>  
            @endif


            @if($devis->propal_admin_space)
                <h3>L'espace admin</h3>
                {!!$devis->propal_admin_space !!}
                <p class="page-break"></p>
                <!------------------------------------------>  
            @endif

            @if($devis->propal_super_admin_space)
                <h3>L'espace super Administrateur</h3>
                {!!$devis->propal_super_admin_space !!}
                <p class="page-break"></p>
                <!------------------------------------------>    
            @endif

        @endif()






        @if($devis->propal_technic_solution || $devis->propal_generalities)
        <table class="page-header"><tr ><td><h2>Notre offre technique pour la réalisaton</h2></td> <td ><img src="http://www.catalyz.fr/uploads/thumbnails/uploads/assets/image/iStock_000012844699XSmall_346x167.png" style="height: 60px" ></td></tr></table>


            @if($devis->propal_technic_solution)
                <h3>Notre proposition technique</h3>
                {!!$devis->propal_technic_solution !!}
                
            @endif



            @if($devis->propal_generalities)
                <h3>Concrètement...</h3>
                {!!$devis->propal_generalities !!}
            @endif

            <p class="page-break"></p>
            <!------------------------------------------>  
        @endif()






        <table class="page-header"><tr ><td><h2>Propriété</h2></td> <td ><img src="http://icons.iconarchive.com/icons/tpdkdesign.net/refresh-cl/256/System-Key-icon.png" style="height: 60px" ></td></tr></table>

                @include('admin/devis/propal._propriety')
                @if($devis->propal_propriety)
                    {!!$devis->propal_propriety !!}
                @endif



        <p class="page-break"></p>
        <!------------------------------------------>    



        
        @if($devis->propal_payment_conditions || $devis->propal_delivery_terms  || $devis->propal_summuary)
        <table class="page-header"><tr ><td><h2>Tarifs & délais</h2></td> <td ><img src="https://cdn.nav.com/wp-content/uploads/2015/10/invoice_calculator.gif" style="height: 60px" ></td></tr></table>




            @if($devis->content|| $devis->amount_HT || $devis->amount_TTC)
            <h3>Tarif :</h3>
            @if($devis->content)
                {!!$devis->content !!}
            @endif
            <div class="signIt" style="text-align: center;">
               {!!$devis->amount_HT !!} €  &nbsp;HT <i>( soit {!! $devis->amount_TTC !!} € &nbsp;TTC)</i>
            </div>
            @endif

            

            


            @if($devis->propal_payment_conditions)
                <br>
                <h3>Modalités de paiement :</h3>
                {!!$devis->propal_payment_conditions !!}
            @endif

            @if($devis->propal_delivery_terms)
                <br>
                <h3>Livraison :</h3>
                {!!$devis->propal_delivery_terms !!}
            @endif

            @if($devis->propal_summuary)
                <BR><BR>    
                {!!$devis->propal_summuary !!}
            @endif


            <div class="signIt">
                    Nom de d’entreprise : {{$devis->client->firm_name}}<br>
                    Nom du gérant :<br>
                    « Bon pour accord »  le :   ___/___/{{date('Y')}}<br>
                    Signature du CLIENT :<br><br><br><br>
            </div>


           



           

        @endif()


        @if($devis->propal_option_hosting)
            <p class="page-break"></p>
            <!------------------------------------------>  
            <table class="page-header"><tr ><td><h2>Hébergement (optionnel)</h2></td> <td > <img src="http://www.datxos.com/templates/datxos/html/img/server-icon-1.png" style="height: 60px"></td></tr></table>
            @include('admin/devis/propal._option_hosting')
        @endif

    





    </div>
</body>
</html>







