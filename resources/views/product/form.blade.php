<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group mb-2 mt-3">
            {{ Form::file('image', ['class' => 'custom-file-input', 'id' => 'customFile']) }}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('Nome') }}
            {{ Form::text('name', $product->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Insira o nome']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('Código') }}
            {{ Form::text('code', $product->code, ['class' => 'form-control' . ($errors->has('code') ? ' is-invalid' : ''), 'placeholder' => 'Insira o código']) }}
            {!! $errors->first('code', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('Cep') }}
            {{ Form::text('cep', $product->cep, ['class' => 'form-control' . ($errors->has('cep') ? ' is-invalid' : ''), 'id' => 'cep', 'placeholder' => 'Insira o cep']) }}
            {!! $errors->first('cep', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group mb-2">
            {{ Form::label('Preço') }}
            {{ Form::text('price', $product->price, ['class' => 'form-control' . ($errors->has('price') ? ' is-invalid' : ''), 'id' => 'price', 'placeholder' => 'Insira o preço']) }}
            {!! $errors->first('price', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary mt-1">{{ __('Enviar') }}</button>
    </div>
</div>

@section("customJs")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const cepInput = document.getElementById('cep');
            Inputmask('99999-999').mask(cepInput);

            const priceInput = document.getElementById('price');
            inputPrice(priceInput);
        });

        function inputPrice(priceInput){
            priceInput.addEventListener('input', function (event) {
                let value = event.target.value;

                value = value.replace(/[^\d.]/g, '');

                const match = value.match(/^\d{1,8}([.]\d{0,2})?/);
                if (match) {
                    value = match[0];
                } else {
                    value = '';
                }

                priceInput.value = value;
            });
        }
    </script>
@endsection
