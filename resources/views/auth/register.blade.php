@extends('main')

@section('title', '| Register')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">       
            {!! Form::open() !!}

                {{ Form::label('name', 'Name:') }}
                {{ Form::text('name', null, ['class' => 'form-control']) }}
                <br>
            
                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email', null, ['class' => 'form-control']) }}
                <br>

                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', ['class' => 'form-control']) }}
                <br>

                {{ Form::label('password_conformation', 'Confirm password:') }}
                {{ Form::password('password_conformation', ['class' => 'form-control']) }}  
                <br>

                {{ Form::submit('Register', ['class' => 'btn btn-primary btn-block']) }}

            {!! Form::close() !!}
        </div>
    </div>

@endsection