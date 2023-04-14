<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nick') }}
            {{ Form::text('nick', $pet->nick, ['class' => 'form-control' . ($errors->has('nick') ? ' is-invalid' : ''), 'placeholder' => 'Nick']) }}
            {!! $errors->first('nick', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('password') }}
            {{ Form::password('password', $pet->password, ['class' => 'form-control' . ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'password']) }}
            {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $pet->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dog_breed:') }}<br>
            {{ Form::label('Boxer') }}
            {{ Form::radio('dog_breed', 'Boxer', ['class' => 'form-control' . ($errors->has('dog_breed') ? ' is-invalid' : ''), 'placeholder' => 'dog_breed']) }}
            <br>
            {{ Form::label('Buldog') }}
            {{ Form::radio('dog_breed', 'Buldog', ['class' => 'form-control' . ($errors->has('dog_breed') ? ' is-invalid' : ''), 'placeholder' => 'dog_breed']) }}
            <br>
            {{ Form::label('Labrador') }}
            {{ Form::radio('dog_breed', 'Labrador', ['class' => 'form-control' . ($errors->has('dog_breed') ? ' is-invalid' : ''), 'placeholder' => 'dog_breed']) }}
            <br>
            {{ Form::label('Caniche') }}
            {{ Form::radio('dog_breed', 'Caniche', ['class' => 'form-control' . ($errors->has('dog_breed') ? ' is-invalid' : ''), 'placeholder' => 'dog_breed']) }}
            {!! $errors->first('dog_breed', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('gender:') }}<br>
            {{ Form::label('male') }}
            {{ Form::radio('gender', 'male', ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'gender']) }}
            {{ Form::label('female') }}
            {{ Form::radio('gender', 'female', ['class' => 'form-control' . ($errors->has('gender') ? ' is-invalid' : ''), 'placeholder' => 'gender']) }}
            {!! $errors->first('gender', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('age') }}
            {{ Form::number('age', $pet->age, ['class' => 'form-control' . ($errors->has('age') ? ' is-invalid' : ''), 'placeholder' => 'Age']) }}
            {!! $errors->first('age', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('human_name') }}
            {{ Form::text('human_name', $pet->human_name, ['class' => 'form-control' . ($errors->has('human_name') ? ' is-invalid' : ''), 'placeholder' => 'Human Name']) }}
            {!! $errors->first('human_name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('tel') }}
            {{ Form::text('tel', $pet->tel, ['class' => 'form-control' . ($errors->has('tel') ? ' is-invalid' : ''), 'placeholder' => 'Tel']) }}
            {!! $errors->first('tel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('image') }}
            {{ Form::file('image', $pet->image, ['class' => 'form-control' . ($errors->has('image') ? ' is-invalid' : ''), 'placeholder' => 'Image']) }}
            {!! $errors->first('image', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>