{!! Form::open( ['url' => '/weights', 'method' => 'post', 'class' => 'form-horizontal', 'id' => 'weights_form'] ) !!}

<div class="control-group">
    {!! Form::label('bench', 'Bench Press', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::input('number', 'bench', null, ['id' => 'bench']) !!}
    </div>
</div>

<div class="control-group">
    {!! Form::label('deadlift', 'Deadlift', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::input('number', 'deadlift', null, ['id' => 'deadlift']) !!}
    </div>
</div>

<div class="control-group">
    {!! Form::label('squat', 'Squat', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::input('number', 'squat', null, ['id' => 'squat']) !!}
    </div>
</div>

<div class="control-group">
    {!! Form::label('ohp', 'Overhead Press', ['class' => 'control-label']) !!}
    <div class="controls">
        {!! Form::input('number', 'ohp', null, ['id' => 'ohp']) !!}
    </div>
</div>

<div class="control-group">
    {!! Form::button('Submit', ['type' => 'submit', 'onclick' => 'href="/weights"']) !!}
</div>

{!! Form::close() !!}