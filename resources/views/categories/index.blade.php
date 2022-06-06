@extends('layouts.app')

@section('title', 'Categories | Home')

@section('content')

<div class="w-10/12 mx-auto mt-20">
    <div class="">
        <div class='grid grid-cols-4 gap-4 '>            
            @forelse($categories as $category)
            <div class='border '>
                <div class="m-7">                
                    <h3 class="text-[20px] hover:text-blue-600 font-[400px]"><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></h3>
                    <p class="text-[15px]">{{ $category->short_description }}
                    <div class=" flex flex-row flex-wrap gap-3 m-2 text-sm text-gray-400">
                        <div><a class='date' href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="float-left mt-[2.5px] mr-[2px] w-[12px] h-[12px]">
                                <path class="fill-gray-400" d="M160 32V64H288V32C288 14.33 302.3 0 320 0C337.7 0 352 14.33 352 32V64H400C426.5 64 448 85.49 448 112V160H0V112C0 85.49 21.49 64 48 64H96V32C96 14.33 110.3 0 128 0C145.7 0 160 14.33 160 32zM0 192H448V464C448 490.5 426.5 512 400 512H48C21.49 512 0 490.5 0 464V192zM64 304C64 312.8 71.16 320 80 320H112C120.8 320 128 312.8 128 304V272C128 263.2 120.8 256 112 256H80C71.16 256 64 263.2 64 272V304zM192 304C192 312.8 199.2 320 208 320H240C248.8 320 256 312.8 256 304V272C256 263.2 248.8 256 240 256H208C199.2 256 192 263.2 192 272V304zM336 256C327.2 256 320 263.2 320 272V304C320 312.8 327.2 320 336 320H368C376.8 320 384 312.8 384 304V272C384 263.2 376.8 256 368 256H336zM64 432C64 440.8 71.16 448 80 448H112C120.8 448 128 440.8 128 432V400C128 391.2 120.8 384 112 384H80C71.16 384 64 391.2 64 400V432zM208 384C199.2 384 192 391.2 192 400V432C192 440.8 199.2 448 208 448H240C248.8 448 256 440.8 256 432V400C256 391.2 248.8 384 240 384H208zM320 432C320 440.8 327.2 448 336 448H368C376.8 448 384 440.8 384 432V400C384 391.2 376.8 384 368 384H336C327.2 384 320 391.2 320 400V432z"/>
                            </svg>
                            <span class="icon-calendar"></span> {{ $category->created_at->diffForHumans() }}</a>
                        </div>
                        <div><a href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"  class="float-left mt-[2.5px] mr-[2px] w-[12px] h-[12px]">
                                <path class="fill-gray-400" d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
                            </svg>
                            <span class="icon-user2"></span> {{ $category->user->name }}</a>
                        </div>
                        <div class="posts-count">
                            <a href="{{ route('categories.show', $category) }}"><span class="icon-tag"></span> {{ $category->posts_count }}
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="float-left mt-[2.5px] mr-[2px] w-[12px] h-[12px]">
                                <path class="fill-gray-400" d="M48 32H197.5C214.5 32 230.7 38.74 242.7 50.75L418.7 226.7C443.7 251.7 443.7 292.3 418.7 317.3L285.3 450.7C260.3 475.7 219.7 475.7 194.7 450.7L18.75 274.7C6.743 262.7 0 246.5 0 229.5V80C0 53.49 21.49 32 48 32L48 32zM112 176C129.7 176 144 161.7 144 144C144 126.3 129.7 112 112 112C94.33 112 80 126.3 80 144C80 161.7 94.33 176 112 176z"/>
                            </svg></a>
                        </div>                        
                    </div>
                </div>
            </div>
            @empty
                <p class='lead'>There are no categories to show.</p>
            @endforelse
        </div>
        {{ $categories->links() }}
    </div>
</div>

@endsection
