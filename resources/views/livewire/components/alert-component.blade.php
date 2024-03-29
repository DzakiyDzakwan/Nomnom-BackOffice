<div class="toast-container position-fixed top-0 end-0 p-3">
    <div id="alert" class="toast align-items-center text-bg-{{ $type }}
" role="alert" aria-live="assertive"
        aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">
                {!! $message !!}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                aria-label="Close"></button>
        </div>
    </div>
</div>
