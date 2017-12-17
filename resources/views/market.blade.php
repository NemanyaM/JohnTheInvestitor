@extends('app')

@section('content')
    <div class="container">
        <row>
            <div class="col-sm">
                <market></market>
            </div>
            <div class="col-sm">
                <commonkiveo></commonkiveo>
            </div>
            <div class="col-sm">
                <metadeocommon></metadeocommon>
            </div>
        </row>
    </div>
    <div class="container">
        <a href="/marketCreate" style="text-decoration: underline">ADD NEW COMPANY</a>
    </div>
@endsection