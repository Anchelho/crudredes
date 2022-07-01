<div class="box box-info padding-1">
    <div class="box-body">

        <div class="form-group">
            {{ Form::label('gerencia') }}
            {{ Form::text('gerencia', $registro->gerencia, ['class' => 'form-control' . ($errors->has('gerencia') ? ' is-invalid' : ''), 'placeholder' => 'Gerencia']) }}
            {!! $errors->first('gerencia', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cargo') }}
            {{ Form::text('cargo', $registro->cargo, ['class' => 'form-control' . ($errors->has('cargo') ? ' is-invalid' : ''), 'placeholder' => 'Cargo que Desempeña']) }}
            {!! $errors->first('cargo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $registro->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido paterno') }}
            {{ Form::text('appaterno', $registro->appaterno, ['class' => 'form-control' . ($errors->has('appaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) }}
            {!! $errors->first('appaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('apellido materno') }}
            {{ Form::text('apmaterno', $registro->apmaterno, ['class' => 'form-control' . ($errors->has('apmaterno') ? ' is-invalid' : ''), 'placeholder' => 'Apellido Materno']) }}
            {!! $errors->first('apmaterno', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('carnet') }}
            {{ Form::text('carnet', $registro->carnet, ['class' => 'form-control' . ($errors->has('carnet') ? ' is-invalid' : ''), 'placeholder' => 'Carnet']) }}
            {!! $errors->first('carnet', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('facebook') }}
            {{ Form::text('face', $registro->face, ['class' => 'form-control' . ($errors->has('face') ? ' is-invalid' : ''), 'placeholder' => 'Facebook']) }}
            {!! $errors->first('face', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('instagram') }}
            {{ Form::text('insta', $registro->insta, ['class' => 'form-control' . ($errors->has('insta') ? ' is-invalid' : ''), 'placeholder' => 'Instagram']) }}
            {!! $errors->first('insta', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('twiter') }}
            {{ Form::text('twi', $registro->twi, ['class' => 'form-control' . ($errors->has('twi') ? ' is-invalid' : ''), 'placeholder' => 'Twiter']) }}
            {!! $errors->first('twi', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('regional') }}
            {{ Form::text('regional', $registro->regional, ['class' => 'form-control' . ($errors->has('regional') ? ' is-invalid' : ''), 'placeholder' => 'Regional']) }}
            {!! $errors->first('regional', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('celular') }}
            {{ Form::text('cel', $registro->cel, ['class' => 'form-control' . ($errors->has('cel') ? ' is-invalid' : ''), 'placeholder' => 'Celular']) }}
            {!! $errors->first('cel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Correo Electronico') }}
            {{ Form::text('Correo Electronico', $registro->email, ['class' => 'form-control' . ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Correo Electronico']) }}
            {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <br>
    <br>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>


<style>
    @use postcss-preset-env {
  stage: 0;
}

:root {
  --color-background: #e5e3fa;
  --color-primary: #2a07c9;
  --font-family-base: Poppin, sans-serif;
  --font-size-h1: 1.25rem;
  --font-size-h2: 1rem;
}


* {
  box-sizing: inherit;
}

html {
  box-sizing: border-box;
}

body {
  background-color: var(--color-background);
  display: grid;
  font-family: var(--font-family-base);
  line-height: 2;
  margin: 0;
  min-block-size: 100vh;
  padding: 5vmin;
 /* place-items: center;*/
 place-items: center stretch;
}

address {
  font-style: normal;
}

button {
  border: 0;
  color: inherit;
  cursor: pointer;
  font: inherit;
}

fieldset {
  border: 0;
  margin: 0;
  padding: 0;
}

h1 {
  font-size: var(--font-size-h1);
  line-height: 1.2;
  margin-block: 0 1.5em;
}

h2 {
  font-size: var(--font-size-h2);
  line-height: 1.2;
  margin-block: 0 0.5em;
}

legend {
  font-weight: 600;
  margin-block-end: 0.5em;
  padding: 0;
}

input {
  border: 0;
  color: inherit;
  font: inherit;
}

input[type="radio"] {
  accent-color: var(--color-primary);
}

table {
  border-collapse: collapse;
  inline-size: 100%;
}

tbody {
  color: #b4b4b4;
}

td {
  padding-block: 0.125em;
}

tfoot {
  border-top: 1px solid #b4b4b4;
  font-weight: 600;
}

.align {
  display: grid;
  place-items: center;
}


.button:focus,
.button:hover {
  background-color: #1b1bec;

}

.button--full {
  inline-size: 100%;
}

.card {
  border-radius: 1em;
  background-color: var(--color-primary);
  color: #fff;
  padding: 1em;
}

.form {
  display: grid;
  gap: 2em;
}

.form__radios {
  display: grid;
  gap: 1em;
}

.form__radio {
  align-items: center;
  background-color: #fefdfe;
  border-radius: 1em;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
  display: flex;
  padding: 1em;
}

.form__radio label {
  align-items: center;
  display: flex;
  flex: 1;
  gap: 1em;
}

.header {
  display: flex;
  justify-content: center;
  padding-block: 0.5em;
  padding-inline: 1em;
}

.icon {
  block-size: 1em;
  display: inline-block;
  fill: currentColor;
  inline-size: 1em;
  vertical-align: middle;
}

.iphone {
  background-color: #fbf6f7;
  background-image: linear-gradient(to bottom, #fbf6f7, #fff);
  border-radius: 2em;
  block-size: 812px;
  box-shadow: 0 0 1em rgba(0, 0, 0, 0.0625);
  inline-size: 375px;
  overflow: auto;
  padding: 2em;
}

</style>
