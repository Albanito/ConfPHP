@extends('layouts.front')
@section('content')
    <aside>
        <!-- Blade Template engine -->
        {!! Form:: open(array('url' => 'contact_request')) !!} <!--contact_request is a router from Route class-->

        <ul class="errors">
            @foreach($errors->all('<li>:message</li>') as $message)
                {{ $message }}
            @endforeach
        </ul>
<div>
        {!! Form::label ('first_name', 'Prenom' )!!}
        {!! Form:: text ('first_name', '' )!!}
        </div><div>
        {!! Form:: label ('last_name', 'Nom' )!!}
        {!! Form:: text ('last_name', '' )!!}
        </div><div>
        {!! Form:: label ('phone_number', 'Telephone' )!!}
        {!! Form:: text ('phone_number', '', array('placeholder' => 'Saississez votre numéro')) !!}
        </div><div>
        {!! Form:: label ('email', 'E-mail') !!}
        {!! Form:: email ('email', '', array('placeholder' => 'Votre email')) !!}
        </div><div>
        {!! Form:: label ('subject', 'Sujet') !!}
        {!! Form:: input ('subject', '') !!}
        </div><div>
        {!! Form:: label ('message', 'Message*' )!!}
        {!! Form:: textarea ('message', '')!!}
        </div><div>
        {!! Form::reset('Clear', array('class' => 'you css class for button')) !!}
        {!! Form::submit('Send', array('class' => 'you css class for button')) !!}

        {!! Form:: close() !!}</div>
    </aside>
@endsection
<html>
<body>

</body>
</html>