@extends('layout.admin_layout')


@section("main")

  <section class="panel important">
    <h2>STATISTIQUES DE LA CLASSE</h2>
  </section>


  <h1>
    L'etudiant qui est le premier de la classe est {{ $etudiant->name }} {{ $etudiant->surname}}
    avec une moyenne de {{ $etudiant->moyenne}} /20 
  </h1>


@endsection