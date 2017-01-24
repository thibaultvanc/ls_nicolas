@extends('layouts.admin')

@section('content')

<div class=" alert alert-info"><b>Pour modifier cette Page</b><br>organit > resources/views/admin/cheatsheet/dev_cheatsheet_HTML_CSS</div>

<h2>créer un compte sur JSFIDDLE ou JS edit et mettre un lien en footer</h2>
	
<h3>Sticky footer styles</h3>

<pre>
/* Sticky footer styles
-------------------------------------------------- */
html {
  position: relative;
  min-height: 100%;
}
body {
  /* Margin bottom by footer height */
  margin-bottom: 60px;
}
.footer {
  position: absolute;
  bottom: 0;
  width: 100%;
  /* Set the fixed height of the footer here */
  height: 60px;
  background-color: #f5f5f5;
}


/* Custom page CSS
-------------------------------------------------- */
/* Not required for template or sticky footer method. */

body > .container {
  padding: 60px 15px 0;
}
.container .text-muted {
  margin: 20px 0;
}

.footer > .container {
  padding-right: 15px;
  padding-left: 15px;
}

code {
  font-size: 80%;
}


   <footer class="footer">
      <div class="container">
        <p class="text-muted">Place sticky footer content here.</p>
      </div>
    </footer>

</pre>




@endsection