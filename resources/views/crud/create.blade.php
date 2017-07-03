{{-- Newgame page --}}
<div class="modal fade" id="create" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 id="titlenew" class="modal-title"></h4>
      </div>
      <div class="modal-body">
      {!! Form::open(array('url'=>'/crud/edit/-1','method'=>'POST', 'files'=>true)) !!}
      {{ csrf_field() }}
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name')!!}
        {!! Form::file('catmap_img') !!}
        {!! Form::submit('Voeg Categorie Toe', array('class'=>'send-btn')) !!}
      {!! Form::close() !!}
        {{-- <form id="newform" method="POST" files="true"> --}}
          {{-- <label id="name">Name</label>
          <input id="name" name="name" class="form-control">
          <input type="file" name="catmap_img" class="form-control">
          <button id="btnnew" class="btn btn-warning"></button>
        </form> --}}
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
