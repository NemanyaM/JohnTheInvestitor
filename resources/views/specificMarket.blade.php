@extends('app')

@section('content')
    <div class="container">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Market</th>
                <th>Company Name</th>
                <th>Time</th>
                <th>Stock Type</th>
                <th>Price</th>
            </tr>
            </thead>
            <tbody>
            <tr style="color: blue;">
                <td>{{ $market->market}}</td>
                <td>{{ $market->company_name}}</td>
                <td>{{ $market->created_at}}</td>
                <td>{{ $market->stock_type}}</td>
                @if ($market->stock_type == 'Preffered stock')
                    <td class="badge" style="color: blue;">{{ $market->price}}</td>
                @else
                    <td class="badge" style="color: orange;">{{ $market->price}}</td>
                @endif
            </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <a href="/" style="text-decoration: underline">Back to the Overview</a>
    </div>
@endsection