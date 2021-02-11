<x-app-layout>
    <x-slot name="header">

        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <span style="float:left">{{ __('Posts') }}</span>
            </h2>
            <a href="/posts/create"><div title="Add a new post" class="bg-indigo-500 text-white font-bold cursor-pointer rounded-full h-12 w-12 flex items-center justify-center">+</div></a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-800">
                    {{-- Display success message --}}
                    @if(session('success'))
                        <div class="relative px-4 py-3 mb-5 leading-normal text-green-700 bg-green-100 rounded-lg" id="alert-icon" role="alert">
                            <span class="absolute inset-y-0 left-0 flex items-center ml-4">
                                <svg class="w-6 h-6 fill-current" viewBox="0 0 20 20"><path d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                            </span>
                            <p class="ml-8"><span class="font-bold">Success!</span> {{session('success')}} </p>
                        </div>
                    @endif
                   @if(isset($posts))
                    @if(count($posts) > 0)
                    <div class="grid grid-cols-12 rounded overflow-hidden mb-5">
                            @foreach ($posts as $post)
                                    <div class="col-span-6 mb-6 px-6 mr-3 py-6 shadow-md border border-indigo-300 rounded-3xl">
                                        <img class="h-60 w-full px-6" src="{{asset('image/'.$post->image_url)}}" alt="Mountain">
                                        <div class="px-6 py-4">
                                            <div class="font-bold text-xl mb-2">{{$post->title}}</div>
                                            <p class="text-gray-700 text-base">
                                                @if(strlen($post->content) > 20)
                                                    {{substr($post->content, 20)}}...
                                                @else
                                                    {{$post->content}}
                                                @endif
                                            </p>
                                        </div>
                                        <hr>
                                        <div class="my-6 px-6">
                                            @if($post->user->id == Auth::user()->id)
                                                <i>Written by: <span class="font-bold">{{"You"}}</span></i>
                                            @else
                                                <i>Written by: <span class="font-bold">{{$post->user->name}}</span></i>
                                            @endif
                                        </div>
                                        <div class="my-6 px-6">
                                            <i>Created at: <span class="font-bold">{{$post->created_at}}</span></i>
                                        </div>
                                        <div class="my-6 px-6 pb-4">
                                            <i>Number of views :<span class="font-bold">{{$post->views}}</span></i>
                                        </div>
                                        <div class="px-6 pt-4 pb-2">
                                            <a href="/posts/{{$post->id}}"><span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">View</span></a>
                                        </div>
                                    </div>
                                    @endforeach
                        </div>
                        {{ $posts->links() }}
                    @else
                        <div class="text-center font-bold text-2xl bg-green-100 mb-5 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            No posts yet
                        </div>
                        <div class="text-center"><a href="posts/create"><button class="bg-indigo-500 p-4 rounded-md">Be the first to add a post</button></a></div>
                    @endif
                   @endif
                </div>
            </div>
        </div>
    </div>

    <script>

        document.getElementById('alert-icon').onclick = function(){
            this.style.display = "none";
        }
    </script>
</x-app-layout>
