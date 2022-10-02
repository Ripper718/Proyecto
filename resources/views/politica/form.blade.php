<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('folio') }}
            {{ Form::text('folio', $politica->folio, ['class' => 'form-control' . ($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' => 'Folio']) }}
            {!! $errors->first('folio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('NombrePolitica') }}
            {{ Form::text('NombrePolitica', $politica->NombrePolitica, ['class' => 'form-control' . ($errors->has('NombrePolitica') ? ' is-invalid' : ''), 'placeholder' => 'Nombrepolitica']) }}
            {!! $errors->first('NombrePolitica', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('DescripcionPolitica') }}
            {{ Form::text('DescripcionPolitica', $politica->DescripcionPolitica, ['class' => 'form-control' . ($errors->has('DescripcionPolitica') ? ' is-invalid' : ''), 'placeholder' => 'Descripcionpolitica']) }}
            {!! $errors->first('DescripcionPolitica', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>