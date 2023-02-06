@extends('layout.admin_layout')


@section("main")

<section class="panel important">
    <h2>Creer Un Enregistrement</h2>
    @if(session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
    @endif
  </section>

  
  
  <div class="container">  
    <form id="contact" method="post" action="/register_form">
      @csrf
      <fieldset>
        <label> Le Nom : </label>
        <input placeholder="Le Nom" name="nom" type="text" tabindex="1" required/>
      </fieldset>
      <fieldset>
        <label>Le Prenom  : </label>
        <input placeholder="Le Prenom" name="prenom" type="text" tabindex="2" required />
      </fieldset>
      <fieldset>
        <label> Le Numero de Telephone : </label>
        <input placeholder="Le Numero de Telephone" name="phone_number" type="tel" tabindex="1" required />
      </fieldset>
      <fieldset>
        <label> La Note du Premier Devoir : </label>
        <input placeholder="La Note du Premier Devoir" name="note_one" type="number" min="0" max="20" required/>
      </fieldset>
      <fieldset>
        <label>La Note Examen : </label>
        <input placeholder="La Note de L'examen" name="exam_note" type="number" min="0" max="20" required/>
      </fieldset>
      <fieldset>
        <label> Le Semestre : </label>
        <select name="semestre_id" required>
          <option>...</option>

          @foreach($semestres as $semestre)
  
              <option value="{{ $semestre->id }}">
                  {{ $semestre->name }}
              </option>
  
          @endforeach
  
        </select>
      </fieldset>
      <fieldset>
        <label> La Matiere : </label>
        <select name="matiere_id" required>
          <option>...</option>

          @foreach($matieres as $matiere)
  
              <option value="{{ $matiere->id }}">
                  {{ $matiere->name }}
              </option>
  
          @endforeach
  
        </select>
      </fieldset>
      <fieldset>
        <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">
          Enregistrer
        </button>
      </fieldset>
    </form>
  </div>


@endsection