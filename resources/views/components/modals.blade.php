<!-- Modal-->
<div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div {{ $attributes->merge(['class' => 'modal-dialog']) }} role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{$label ?? 'Modal Title'}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>

            @if(isset($action))
                <form action="{{$action}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    @endif
                    <div class="modal-body">
                        {{$slot}}
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Close</button>
                        @if(isset($action))
                            <button type="submit" class="btn btn-primary font-weight-bold">Save changes</button>
                        @endif
                    </div>
                    @if(isset($action))
                </form>
            @endif

        </div>
    </div>
</div>
<!-- /Modal-->
