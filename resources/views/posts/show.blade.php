<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   @if(isset($post))
                        <div class="col-span-6 mb-6 px-6 shadow-md">
                            <img class="h-60 px-6 w-2/3 mx-auto" src="{{asset('image/'.$post->image_url)}}" alt="Mountain">
                            <div class="px-6 py-4 mx-auto">
                                <div class="font-bold text-xl mb-2 text-center py-6">{{$post->title}}</div>
                                <p class="text-gray-700 text-base">
                                    {{$post->content}}
                                </p>
                            </div>
                            <div class="my-6 px-6">
                                @if($post->user->id == Auth::user()->id)
                                    <i>Written by: <span class="font-bold">{{"You"}}</span></i>
                                @else
                                    <i>Written by: <span class="font-bold">{{$post->user->name}}</span></i>
                                @endif
                            </div>
                            <div class="my-6 px-6 pb-4">
                                <i>Number of views :<span class="font-bold">{{$post->views}}</span></i>
                            </div>
                            <div class="my-6 px-6 pb-4">
                                <i>Created at: <span class="font-bold">{{$post->created_at}}</span></i>
                            </div>
                        </div>
                   @endif
                   <div class="text-center mt-9"><a href="/posts"><button class="border border-indigo-500 p-4 rounded-md bg-indigo-500">Back</button></a></div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
