{{-- Newgame page --}}
<div class="modal fade" id="newgame" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 id="titlenew" class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form id="newform" method="POST">
          {{ csrf_field() }}
          <label id="name">Name</label>
          <input id="name" name="name" class="form-control">
          <input type="file" name="catmap_img" class="form-control">
          <button id="btnnew" class="btn btn-warning"></button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>
