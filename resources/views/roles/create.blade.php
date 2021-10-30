@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1 class='col text-center'> 
        ROLES
    </h1>
</section>
<div class="content">
    @include('adminlte-templates::common.errors')
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::open(['route' => 'roles.store']) !!}

                @include('roles.fields')
                <!-- Permissions -->
                <div class="form-group col-sm-12">
                    {!! Form::label('permissions', 'Permisos:') !!}
                    {!! Form::select('permissions', $permissions, null,
                    ['required'=>'required','multiple'=>'multiple','name'=>'permissions[]','class' =>
                    'form-control']) !!}
                </div>
                <!-- Submit Field -->
                <div class="form-group col-sm-12">
                    {!! Form::submit('Aceptar', ['class' => 'btn btn-secondary']) !!}
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancelar</a>
                </div>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection