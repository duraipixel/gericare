<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Testimonial Title *</label>
    <div class="col-10">
        
        <input class="form-control" name="title" value="{{ $data->title ?? '' }}" required>
    </div>
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Testimonial given by *</label>
    <div class="col-10">
        <input type="text" name="given_by" id="given_by" value="{{ $data->title ?? '' }}" class="form-control" required>

    </div>
</div>
<div class="row mb-3 text_area">
    <label class="col-2 text-end col-form-label">Description *</label>
    <div class="col-10">
        <textarea class="form-control" name="description" id="description" > {{ $data->description ?? '' }}</textarea>
        
    </div>
</div>


<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Designation </label>
    <div class="col-10">
        <input type="text" name="designation" id="designation" value="{{ $data->designation ?? '' }}" class="form-control">

    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Date</label>
    <div class="col-10">
        <input type="date" name="date" id="date" value="{{ $data->date ?? '' }}" class="form-control">
    </div>
</div>

<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Photo</label>
    <div class="col-10">
        <input type="file" class="form-control" name="file"  id="attachment" accept="image/*">
    </div>
</div>
<div class="row mb-3">
    {{-- <label class="col-2 text-end col-form-label">Description</label> --}}
    <div class="col-2"></div>
    <div class="col-5">
        @if(isset($data))
            @if($data->photo)
            <img src="{{asset_url($data->photo)}}" alt="No image" id="image_tag" width="100" height="100">
            @endif
        @endif
    </div>
</div>


<div class="row mb-3">
    <input type="hidden" name="status" value="0" checked="checked">
    <label class="col-2 text-end col-form-label">Status</label>
    <div class="col-10">
        @if(isset($country))
            @if($country->status)
                <input type="checkbox" id="status" name="status" value="1" checked="checked">
            @else
                <input type="checkbox" id="status" name="status" value="0" >
            @endif
      @else
        <input type="checkbox" id="status" name="status" value="1"   @if((isset($data->status) && $data->status)) checked  @endif >
      @endif
    </div>
</div>
@section('scripts')

    <script type="text/javascript">
       
    
       
     
    </script>  
@endsection
