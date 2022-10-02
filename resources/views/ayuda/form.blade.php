<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $ayuda->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombreSolicitante') }}
            {{ Form::text('NombreSolicitante', $ayuda->NombreSolicitante, ['class' => 'form-control' . ($errors->has('NombreSolicitante') ? ' is-invalid' : ''), 'placeholder' => 'Nombresolicitante']) }}
            {!! $errors->first('NombreSolicitante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('TipoFalla') }}
            {{ Form::text('TipoFalla', $ayuda->TipoFalla, ['class' => 'form-control' . ($errors->has('TipoFalla') ? ' is-invalid' : ''), 'placeholder' => 'Tipofalla']) }}
            {!! $errors->first('TipoFalla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DescripcionFalla') }}
            {{ Form::text('DescripcionFalla', $ayuda->DescripcionFalla, ['class' => 'form-control' . ($errors->has('DescripcionFalla') ? ' is-invalid' : ''), 'placeholder' => 'Descripcionfalla']) }}
            {!! $errors->first('DescripcionFalla', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CorreoContacto') }}
            {{ Form::text('CorreoContacto', $ayuda->CorreoContacto, ['class' => 'form-control' . ($errors->has('CorreoContacto') ? ' is-invalid' : ''), 'placeholder' => 'Correocontacto']) }}
            {!! $errors->first('CorreoContacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NumeroContacto') }}
            {{ Form::text('NumeroContacto', $ayuda->NumeroContacto, ['class' => 'form-control' . ($errors->has('NumeroContacto') ? ' is-invalid' : ''), 'placeholder' => 'Numerocontacto']) }}
            {!! $errors->first('NumeroContacto', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>