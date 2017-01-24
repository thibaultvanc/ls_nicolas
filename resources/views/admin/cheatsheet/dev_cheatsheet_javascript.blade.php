@extends('layouts.admin')

@section('content')

<div class=" alert alert-info"><b>Pour modifier cette Page</b><br>organit > resources/views/admin/cheatsheet/dev_cheatsheet_javascript</div>


ajouter des donnee a une serializarion<br>
<pre>data: $(this).serialize() + '&NonFormValue=' + NonFormValue,</pre>




<hr>
<h2>gulp</h2>
<pre>
 gulp
 gulp watch

 pour stopper : ctrl+c



  </pre>



  <h2>bootstrap</h2>
    <h3>tabs</h3>
    Pour faire un lien vers un tab specifique
    <pre class="js">
        <button class="copy"></button>
        <xmp><a href="{ { route('admin.devis.edit',[$item->id]) } }#pointages">LINK</a></xmp>
    </pre>
    <pre>
        //
        var hash = document.location.hash;
        var prefix = "tab-";
        if (hash) {
            $('.nav-tabs a[href='+hash.replace(prefix,"")+']').tab('show');
        }
    </pre>







    <h2>clipboard</h2>
    @include('admin.cheatsheet.javascript.clipboard.doc')

@endsection
