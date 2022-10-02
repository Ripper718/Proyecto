<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $bitacora->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Solicitante') }}
            {{ Form::text('Solicitante', $bitacora->Solicitante, ['class' => 'form-control' . ($errors->has('Solicitante') ? ' is-invalid' : ''), 'placeholder' => 'Solicitante']) }}
            {!! $errors->first('Solicitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ResponsableSistema') }}
            {{ Form::text('ResponsableSistema', $bitacora->ResponsableSistema, ['class' => 'form-control' . ($errors->has('ResponsableSistema') ? ' is-invalid' : ''), 'placeholder' => 'Responsablesistema']) }}
            {!! $errors->first('ResponsableSistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('FactibilidadTarea') }}
            {{ Form::text('FactibilidadTarea', $bitacora->FactibilidadTarea, ['class' => 'form-control' . ($errors->has('FactibilidadTarea') ? ' is-invalid' : ''), 'placeholder' => 'Factibilidadtarea']) }}
            {!! $errors->first('FactibilidadTarea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('SistemaAfectado') }}
            {{ Form::text('SistemaAfectado', $bitacora->SistemaAfectado, ['class' => 'form-control' . ($errors->has('SistemaAfectado') ? ' is-invalid' : ''), 'placeholder' => 'Sistemaafectado']) }}
            {!! $errors->first('SistemaAfectado', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DependenciaSistema') }}
            {{ Form::text('DependenciaSistema', $bitacora->DependenciaSistema, ['class' => 'form-control' . ($errors->has('DependenciaSistema') ? ' is-invalid' : ''), 'placeholder' => 'Dependenciasistema']) }}
            {!! $errors->first('DependenciaSistema', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreTarea') }}
            {{ Form::text('NombreTarea', $bitacora->NombreTarea, ['class' => 'form-control' . ($errors->has('NombreTarea') ? ' is-invalid' : ''), 'placeholder' => 'Nombretarea']) }}
            {!! $errors->first('NombreTarea', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Descripcion') }}
            {{ Form::text('Descripcion', $bitacora->Descripcion, ['class' => 'form-control' . ($errors->has('Descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('Descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>