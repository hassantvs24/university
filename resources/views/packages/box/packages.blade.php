@section('box')

    <x-modals id="addModal" class="modal-lg" action="{{route('package.store')}}" title="{{__('Add new package')}}">

        <div class="row">
            <div class="col">
                <x-ninput label="{{__('Package Name')}}" name="name" required="required" />
                <x-ninput label="{{__('Hours')}}" type="number" min="0" step="any" name="hours" required="required" />
                <x-ninput label="{{__('Price')}}" type="number" min="0" step="any" name="price" required="required" />
            </div>
            <div class="col">
                <x-ninput label="{{__('Expire')}}" name="expire" />

                <div class="form-group mb-2">
                    <label for="exampleTextarea">Description</label>
                    <textarea class="form-control" id="exampleTextarea" name="description" rows="3">{{old('description')}}</textarea>
                </div>

                <div class="form-group mt-3">
                    <div class="checkbox-list">
                        <label class="checkbox checkbox-success">
                            <input type="checkbox" name="isCoupon"/>
                            <span></span>
                            {{__('Is coupon applicable?')}}
                        </label>
                    </div>
                </div>

            </div>
        </div>

    </x-modals>


    <x-modals id="ediModal" class="modal-lg" action="#" title="{{__('Edit package')}}">
        @method('PUT')

        <div class="row">
            <div class="col">
                <x-ninput label="{{__('Package Name')}}" name="name" required="required" />
                <x-ninput label="{{__('Hours')}}" type="number" min="0" step="any" name="hours" required="required" />
                <x-ninput label="{{__('Price')}}" type="number" min="0" step="any" name="price" required="required" />
            </div>
            <div class="col">
                <x-ninput label="{{__('Expire')}}" name="expire" />

                <div class="form-group mb-2">
                    <label for="exampleTextareae">Description</label>
                    <textarea class="form-control" id="exampleTextareae" name="description" rows="3"></textarea>
                </div>

                <div class="form-group mt-3">
                    <div class="checkbox-list">
                        <label class="checkbox checkbox-success">
                            <input type="checkbox" id="checkCoupon" name="isCoupon"/>
                            <span></span>
                            {{__('Is coupon applicable?')}}
                        </label>
                    </div>
                </div>

            </div>
        </div>

    </x-modals>

@endsection