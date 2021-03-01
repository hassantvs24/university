<div class="image-input image-input-outline" id="{{$id}}">

    <div class="image-input-wrapper my_photo {{$id}}" style="background-image: url({{asset('assets/media/users/blank.png')}})"></div>

    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
        <i class="fa fa-pen icon-sm text-muted"></i>
        <input type="file" name="{{$name ?? ''}}" accept=".png, .jpg, .jpeg"/>
        <input type="hidden" name="{{$name ?? ''}}_remove"/>
    </label>

    <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
          <i class="ki ki-bold-close icon-xs text-muted"></i>
     </span>
</div>
