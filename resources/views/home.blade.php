@extends('layouts.app')

@section('content')
<div class="lg:flex lg:justify-between">
    <div class="lg:w-32">
        @include('_sidebar-links')
    </div>
    <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
        @include('_publish-tweet-panel')

        <div class="border border-gray-200 rounded-2xl">
            @foreach (range(1,8) as $index)
            <div class="flex p-5 border-b border-gray-200">
                <img src="https://randomuser.me/api/portraits/men/{{ $index }}.jpg" alt="avatar"
                    class="rounded-full max-h-12 mr-3">

                <div class="grid">
                    <h5 class="font-bold mb-1">John Doe</h5>
                    <p class="text-sm">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eius fuga aspernatur eveniet
                        reprehenderit ex id debitis in mollitia, sequi incidunt pariatur sed animi ad et corporis vero!
                        Quam, tempora ex.
                    </p>
                    <div class="flex gap-2 mt-3">
                        <button class="bg-blue-100 rounded-xl px-2 py-0.5 text-blue-400 font-bold">👍 12</button>
                        <button class="bg-red-100 rounded-xl px-2 py-0.5 text-red-400 font-bold">👎 8</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="lg:w-1/6 bg-blue-100 p-4 rounded-lg">
        @include('_friends-list')
    </div>
</div>
@endsection