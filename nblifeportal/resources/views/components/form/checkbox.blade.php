<div class="form-group">
    {{ Form::label($name, null, ['class' => 'control-label']) }}
    {{ Form::checkbox($name, $value, $ischecked, $attributes)}}
</div>    
