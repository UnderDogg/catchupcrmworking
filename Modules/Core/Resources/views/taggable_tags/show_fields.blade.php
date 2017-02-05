<!-- Tag Id Field -->
<div class="form-group">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    <p>{!! $taggableTags->tag_id !!}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $taggableTags->name !!}</p>
</div>

<!-- Normalized Field -->
<div class="form-group">
    {!! Form::label('normalized', 'Normalized:') !!}
    <p>{!! $taggableTags->normalized !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $taggableTags->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $taggableTags->updated_at !!}</p>
</div>

