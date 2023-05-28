<div class="row">
    <div class="col-md-12">
        @if(isset($errors) && count($errors))
            <div class="alert alert-danger">
                @foreach($errors as $error_array)
                    @foreach($error_array as $error_item)
                        {{ $error_item }} <br/>
                    @endforeach
                @endforeach

                <button class="close-button" aria-label="Dismiss Message", type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        
        @if(isset($success))
            <div class="alert alert-success">
                {{ $success }}

                <button class="close-button" aria-label="Dismiss Message", type="button" data-close>
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
    </div>
</div>
