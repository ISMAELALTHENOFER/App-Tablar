
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('descripcion') }}</label>
    <div>
        {{ Form::text('descripcion', $producto->descripcion, ['class' => 'form-control' .
        ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
        {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>descripcion</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('stock') }}</label>
    <div>
        {{ Form::text('stock', $producto->stock, ['class' => 'form-control' .
        ($errors->has('stock') ? ' is-invalid' : ''), 'placeholder' => 'Stock']) }}
        {!! $errors->first('stock', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>stock</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('precio') }}</label>
    <div>
        {{ Form::text('precio', $producto->precio, ['class' => 'form-control' .
        ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
        {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">producto <b>precio</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>