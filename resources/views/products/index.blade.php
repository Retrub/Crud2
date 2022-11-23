@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Prekės CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Pridėti naują prekę</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Pavadinimas</th>
            <th>Kiekis</th>
            <th>Kaina</th>
            <th>Aprašymas</th>
            <th width="350px">Veiksmas</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id}}</td>
            <td>{{ $product->Pavadinimas }}</td>
            <td>{{ $product->Kiekis }}</td>
            <td>{{ $product->Kaina }}</td>
            <td>{{ $product->Aprasymas }}</td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Rodyti</a>
    
                    <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Readaguoti</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Ištrinti</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection