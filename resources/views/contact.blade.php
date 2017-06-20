

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-theme.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-table.css') }}" rel="stylesheet">
</head>
<form>
 <div class="col-md-8 col-md-offset-2">
 <h1> Contactpagina</h1>
<div class="form-group">
    <label for="selectOption">Maak uw keuze</label>
    <select class="form-control" id="selectOption">
      <option>Vraag</option>
      <option>Opmerking</option>
      <option>Klacht</option>
      <option>Anders</option>
    </select>
  </div>
<div class="form-group">
    <label for="nameInput">Naam</label>
    <input type="name" class="form-control" id="nameInput" aria-describedby="nameHelp" placeholder="Typ uw naam">
    </div>
<div class="form-group">
    <label for="inputEmail">Email adres</label>
    <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Typ uw email adres">
  </div>
<div class="form-group">
    <label for="inputPhone">Telefoonnummer</label>
    <input type="phone" class="form-control" id="inputPhone" placeholder="Telefoonnummer">
  </div>
  <div class="form-group">
    <label for="inputWebsite">Website</label>
    <input type="website" class="form-control" id="inputWebsite" placeholder="Website">
  </div>
  <div class="form-group">
    <label for="messageInput">Bericht</label>
    <textarea class="form-control" id="meassageInput" rows="8"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Verstuur!</button></div>
</form>
  