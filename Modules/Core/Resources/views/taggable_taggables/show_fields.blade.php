<!-- Tag Id Field -->
<div class="form-group">
    {!! Form::label('tag_id', 'Tag Id:') !!}
    <p>{!! $taggableTaggables->tag_id !!}</p>
</div>

<!-- Taggable Id Field -->
<div class="form-group">
    {!! Form::label('taggable_id', 'Taggable Id:') !!}
    <p>{!! $taggableTaggables->taggable_id !!}</p>
</div>

<!-- Taggable Type Field -->
<div class="form-group">
    {!! Form::label('taggable_type', 'Taggable Type:') !!}
    <p>{!! $taggableTaggables->taggable_type !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $taggableTaggables->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $taggableTaggables->updated_at !!}</p>
</div>

