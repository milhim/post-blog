@extends('layouts.app')


@section('content')
    <div class="d-flex row  justify-content-center">

        <div class="col-lg-8 p-4 bg-white rounded">

            <form action="{{ route('posts') }}" method="POST" class="mb-4">

                @csrf
                <div class="mb-4">

                    <label for="body" class="sr-only">Body</label>
                    <textarea name="body" id="body" cols="30" rows="4"
                        class="form-control border-2 w-100 p-3 rounded-2
              @error('body') border-danger @enderror"
                        placeholder="Post something!">

             </textarea>
                    @error('body')
                        <div class="text-danger text-sm">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <div>
                    <button type="submit" class=" btn btn-primary px-4 py-2 rounded-1 font-medium">Post</button>
                </div>
            </form>

            @if ($posts->count())
                @foreach ($posts as $post)
                    <x-post :post="$post"/>
                @endforeach
                <div class="d-flex justify-content-center  ">
                    {{ $posts->links() }}
                @else
                    <p>there are no posts</p>
            @endif

        </div>

    </div>
@endsection
