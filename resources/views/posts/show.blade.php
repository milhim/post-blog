
@extends('layouts.app')


@section('content')

<div class="d-flex row  justify-content-center">

    <div class="col-lg-8 p-4 bg-white rounded">
        <x-post :post="$post"/>
    </div>

</div>

@endsection
