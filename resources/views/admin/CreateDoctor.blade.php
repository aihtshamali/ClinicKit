@extends('layouts.AdminPanel')
@section('content')
  <h1>New User</h1>


<form class="form-group" action="{{url('admin/Doctor')}}" method ="Post">

  <div class="contentform">

    <div class="leftcontact">
          <div class="form-group">
          <p>Name <span>*</span></p>
          <span class="icon-case"><i class="fa fa-user"></i></span>
      <input type="text" name="name" id="prenom" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Prénom' doit être renseigné."/>
              <div class="validation"></div>
    </div>

    <div class="form-group">
    <p>E-mail <span>*</span></p>
    <span class="icon-case"><i class="fa fa-envelope-o"></i></span>
              <input type="email" name="email" id="email" data-rule="email" data-msg="Vérifiez votre saisie sur les champs : Le champ 'E-mail' est obligatoire."/>
              <div class="validation"></div>
    </div>

    <div class="form-group">
    <p>Phone <span>*</span></p>
    <span class="icon-case"><i class="fa fa-mobile-phone"></i></span>
      <input type="text" name="phone" id="society" />
              <div class="validation"></div>
    </div>

    <div class="form-group">
    <p>Company Address <span>*</span></p>
    <span class="icon-case"><i class="fa fa-location-arrow"></i></span>
      <input type="text" name="address" id="adresse" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Adresse' doit être renseigné."/>
              <div class="validation"></div>
    </div>

    <div class="form-group">
    <p>Postcode <span>*</span></p>
    <span class="icon-case"><i class="fa fa-map-marker"></i></span>
      <input type="text" name="postal" id="postal" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Code postal' doit être renseigné."/>
              <div class="validation"></div>
    </div>



</div>

<div class="rightcontact">

    <div class="form-group">
    <p>City <span>*</span></p>
    <span class="icon-case"><i class="fa fa-building-o"></i></span>
      <input type="text" name="ville" id="ville" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Ville' doit être renseigné."/>
              <div class="validation"></div>
    </div>


    <div class="form-group">
      <label for="">Select Category</label>
    <select class="" name="Type"><span>*</span>
      <option value="0">Doctor</option>
      <option value="2">Patient</option>
      <option value="1">Nurse</option>
    </select>
    </div>

    <div class="form-group">
    <p>Specilization <span>*</span></p>
    <span class="icon-case"><i class="fa fa-comment-o"></i></span>
              <input type="text" name="special" id="sujet" data-rule="required" data-msg="Vérifiez votre saisie sur les champs : Le champ 'Sujet' doit être renseigné."/>
              <div class="validation"></div>
    </div>
    <div class="form-group">
      <div class="input-append date form_datetime">
      <input size="16" type="text" value="" placeholder="format: 'dd MM yyyy - hh:ii'">
      <span class="add-on"><i class="icon-th"></i></span>
  </div>

    </div>
</div>
</div>
<button type="submit" class="bouton-contact">Send</button>
<input type="hidden" name="_token" value="{{Session::token()}}"/>
</form>

@endsection
