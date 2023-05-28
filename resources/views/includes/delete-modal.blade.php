<div class="modal">
    <div class="modal__container" data-modal-id="modal-{{ $category['id'] }}">
        <div class="modal__backdrop"></div>
        <div class="modal__content">
            <div class="modal__alerts">
            </div>
            <div class="modal__head">
                <h3 class="heading-light heading-3">Confirm Delete</h3>
            </div>
            <div class="modal__body">
                <p class="lead">Do you really want to delete this category?</p>
            </div>
            <div class="modal__foot">
                <a class="btn btn--default" href="#" data-modal-close="modal-{{ $category['id'] }}">Close</a>
            </div>
        </div>
    </div>
</div>
