@extends('layouts.admin')

@section('content')

<div class=" alert alert-info"><b>Pour modifier cette Page</b><br>organit > resources/views/admin/cheatsheet/dev_cheatsheet_git</div>


<h3>sauvegarder mot de passe avec id_rsa sans passwords</h3>
<div class="">
  <pre>
    <code>
      git remote set-url origin git@github.com:Username/Project.git
    </code>
    <i>
      ex :
      git remote set-url origin git@github.com:thibaultvanc/organit.git
    </i>
  </pre>
</div>
<small><a href="http://stackoverflow.com/questions/14762034/push-to-github-without-password-using-ssh-key">source</a></small>



<h3>Commiter</h3>
<pre>
git add .
git commit -m "deploy"
git push origin master
</pre>




@endsection
