<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p class="font-bold">Your Posts</p>
                </div>
                <div class="bg-gray-200 p-6">
                    <p class="my-5">Total number: <i class="font-bold">{{count(Auth::user()->posts)}}</i></p>                    
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p class="font-bold">Your Profile</p>
                </div>
                <div class="bg-gray-200 p-6">
                    <p class="my-5">Name: <i class="font-bold">{{Auth::user()->name}}</i></p>
                    <p class="my-5">Email: <i class="font-bold">{{Auth::user()->email}}</i></p>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                   <p class="font-bold">General</p>
                </div>
                <div class="bg-gray-200 p-6">
                    <p class="my-5">Number of users: <i class="font-bold">{{App\Models\User::count()}}</i></p>    
                    <p class="my-5">Number of posts: <i class="font-bold">{{App\Models\Post::count()}}</i></p>
                    <a class="text-indigo-800" href="/posts">View all posts</a>    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
