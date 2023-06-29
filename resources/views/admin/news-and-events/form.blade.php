<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Title</label>
    <div class="col-10">
        {!! Form::text('title', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
    </div>
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Media Image</label>
    <div class="col-10">
        <div>
            {!! Form::file('image', ['class' => 'form-control','accept'=>"image/*" ]) !!}
        </div>
        @if ($data->image ?? null)
            <img src="{{ asset('public/files/news_event/'.$data->image) }}" height="60" class="mt-2">
        @endif
    </div> 
</div>
<div class="row mb-3">
    <label class="col-2 text-end col-form-label">Description</label>
    <div class="col-10">
        {!! Form::textArea('description', null, ['class' => 'form-control', 'autocomplete' => 'off']) !!}
    </div>
</div>

