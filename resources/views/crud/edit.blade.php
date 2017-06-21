{{-- Edit page --}}
<div class="modal fade" id="editgame" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 id="titleedit" class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form id="editform" method="POST">
          {{ csrf_field() }}
          <label>Name</label>
          <input id="valuename" name="name" class="form-control">
          <input type="file" id="valueimg" name="img" class="form-control">
          <button id="btnedit" class="btn btn-warning"></button>
        </form>
      </div>
      <div class="modal-footer">      
      </div>
    </div>
  </div>
</div>