<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <a href="/posts">{{ __('Posts >> ') }} </a> <small class="text-blue-600">Add Post</small>
        </h2>
    </x-slot>

    <x-slot name="slot">
        <div class="min-h-screen">
            <div class="relative py-3 sm:w-3/4 sm:mx-auto">
              <div class="relative px-4 py-10 mx-0 md:mx-auto shadow rounded-3xl sm:p-10 w-3/4">
                <div class="sm:w-full mx-auto">

                    {{-- Display errors --}}
                    @if(count($errors) > 0)
                        <div class="bg-red-100 mb-5 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            @foreach ($errors->all() as $error)
                                <p>*{{$error}}</p>
                            @endforeach
                        </div>
                    @endif

                    {{-- Create new post form --}}
                  <div class="flex items-center space-x-5">
                    <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                    <div class="block pl-2 font-semibold text-xl text-gray-700">
                      <h2 class="leading-relaxed mx-auto">Add a new post</h2>
                      <p class="text-sm text-gray-500 font-normal leading-relaxed">Please fill in the required details and click the add button</p>
                    </div>
                  </div>
                  <div class="divide-y divide-gray-200">
                    <form method="POST" enctype="multipart/form-data" action="/posts">
                        @csrf
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                        <div class="flex flex-col">
                            <label class="leading-loose">Title:<span class="text-red-500"> *</span></label>
                            <input name="title" type="text" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Enter post title" value="">
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Content:<span class="text-red-500"> *</span></label>
                            <textarea name="content" type="text" rows="7" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Enter post content"></textarea>
                        </div>
                        <div class="flex flex-col">
                            <label class="leading-loose">Image:<span class="text-red-500"> *</span></label>
                            <input name="file" type="file" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Event title" >
                        </div>
                        </div>
                        <div class="pt-4 flex items-center space-x-4">
                            <button type="button" class="flex justify-center items-center w-full text-gray-900 px-4 py-3 rounded-md focus:outline-none">
                                <a href="/posts"><svg class="w-6 h-6 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg> Cancel</a>
                            </button>
                            <button type="submit" class="bg-blue-500 flex justify-center items-center w-full text-white px-4 py-3 rounded-md focus:outline-none">Add</button>
                        </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </x-slot>

</x-app-layout>