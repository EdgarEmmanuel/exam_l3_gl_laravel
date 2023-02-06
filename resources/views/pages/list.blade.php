@extends('layout.admin_layout')


@section("main")

  <section class="panel important">
    <h2>Liste des enregistrements</h2>
  </section>


  <div class="diI">
    <table>
        <tr>
            <td>ID</td>
            <td>NOM COMPLET </td>
            <td>MATIERE</td>
            <td>SEMESTRE</td>
            <td>EXAMEN</td>
            <td>PREMIER DEVOIR </td>
        </tr>
        @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->id }}</td>
                    <td>{{ $etudiant->name }} {{ $etudiant->surname }} </td>
                    <td>{{ $etudiant->matiere->name }} </td>
                    <td>{{ $etudiant->semestre->name }} </td>
                    <td>{{ $etudiant->exam_note }} / 20 </td>
                    <td>{{ $etudiant->note_one }} / 20 </td>
                  </tr>
         @endforeach
    </table>
</div>

@endsection