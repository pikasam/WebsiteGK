{{-- Delete page --}}
<div class="modal fade" id="deletegame" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h4 id="titledel" class="modal-title"></h4>
      </div>
      <div class="modal-body">
        <form id="delform" method="GET">
          {{ csrf_field() }}
          <button id="btndel" class="btn btn-warning"></button>
        </form>
      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>