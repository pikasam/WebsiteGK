@extends('layouts.app')

@section('content')
{{-- Edit page --}}
<div class="modal fade" id="editgame" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 id="titlevalue" class="modal-title">Edit Game</h4>
      </div>
      <div class="modal-body">
        <form id="editform" method="POST">
          {{ csrf_field() }}
          <label>Name</label>
          <input id="valuename" name="name" class="form-control"></input>
          <input type="image" id="valueimg" name="img" class="form-control"></input>
          <button id="btnvalue" class="btn btn-warning">Edit Record?</button>
        </form>
      </div>
      <div class="modal-footer">      
      </div>
    </div>
  </div>
</div>
@endsection