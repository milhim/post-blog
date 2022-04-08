@props(['post'=>$post])

<div class="mb-4">
    <a href="{{route('users.posts',$post->user)}}" class="font-bold">{{ $post->user->name }}</a> <span
        class="text-secondary  text-sm">{{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-2">{{ $post->body }}</p>

    @can('delete', $post)
        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="mr-1">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-primary bg-white border-0">Delete</button>
        </form>
    @endcan

    <div class="d-flex items-center  ">
        @auth

            @if (!$post->likedBy(auth()->user()))
                <form action="{{ route('posts.likes', $post) }}" method="POST" class="mr-1 ">
                    @csrf
                    <button type="submit" class="text-primary bg-white border-0 ">Like</button>
                </form>
            @else
                <form action="{{ route('posts.likes.destroy', $post) }}" method="POST"
                    class="mr-1">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-primary bg-white border-0">Unlike</button>
                </form>
            @endif
        @endauth

        <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
    </div>
</div>
