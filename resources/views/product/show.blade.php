@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? "{{ __('Show') Product" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ $product->name }}</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> {{ __('Voltar') }}</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <img width="200" class="rounded-4" src="{{ asset('images/' . $product->image) }}">
                        </div>
                        <div class="form-group">
                            <strong>Nome:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="form-group">
                            <strong>Código:</strong>
                            {{ $product->code }}
                        </div>
                        <div class="form-group">
                            <strong>Cep:</strong>
                            {{ $product->cep }}
                        </div>
                        <div class="form-group">
                            <strong>Preço:</strong>
                            {{ $product->price }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
