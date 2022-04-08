@extends('layouts.app')


@section('content')

    <div class="d-flex row  justify-content-center">

        <div class="col-lg-8 ">

            <div class="p-5">
                <h1 class=" fs-3 mb-1">{{ $user->name }}</h1>
                <p>Posted {{ $user->posts()->count() }} posts and received {{$user->receivedLikes()->count()}} likes</p>
            </div>
            <div class="p-4 bg-white rounded">
                @if ($posts->count())
                    @foreach ($posts as $post)
                        <x-post :post="$post" />
                    @endforeach
                    <div class="d-flex justify-content-center  ">
                        {{ $posts->links() }}
                    @else
                        <p>{{ $user->name }} does not have any posts</p>
                @endif
            </div>
        </div>

    </div>

@endsection
