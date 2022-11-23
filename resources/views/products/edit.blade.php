@extends('products.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Readaguoti prekę</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}"> Atgal</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
        There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('products.update',$product->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pavadinimas:</strong>
                <input type="text" name="Pavadinimas" value="{{ $product->Pavadinimas }}" class="form-control" placeholder="Pavadinimas">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kiekis:</strong>
                <input type="text" class="form-control"  name="Kiekis" value="{{ $product->Kiekis }}" placeholder="Kiekis">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kaina:</strong>
                <input type="text" class="form-control"  name="Kaina" value="{{ $product->Kaina }}" placeholder="Kaina">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Aprasymas:</strong>
                <input type="text" class="form-control" name="Aprasymas" value="{{ $product->Aprasymas }}" placeholder="Aprasymas">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Patvirtinti</button>
            </div>
        </div>
   
    </form>
@endsection