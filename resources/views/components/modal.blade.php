    <div class="modal mdllaccount fade" id="popup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">

          <div class="modal-body">
            <div class="" style="margin-top: 20px;">
                  <h2>{{ $title ?? '' }}</h2>
                  <p>
                    {{ $message }}
                  </p>
                  <button type="button" class="btn rounded-8 c-white btn_md_primary ripple scale bg-orange-red">
                    Conect with us
                  </button>
                </div>
          </div>
        </div>
      </div>
    </div>

    <script>
      $('#popup').modal('hide')
    </script>