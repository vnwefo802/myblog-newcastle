
@extends('layouts.app')

@section('title', 'MyBlog | Home')

@section('content')

<div class="w-10/12 mx-auto mt-20">
    <div class="">
        <div class="flex flex-row">
            <div >

                @forelse($posts as $post)

                <div class="w-[750px] h-[175px] border-[1px] max-h-[175px] container my-4">
                    <a href="{{ route('posts.show', $post) }}" class="blog-img" ><img src="{{asset('storage/' . $post->image->path. '')}}" alt="" class="w-[300px] h-[175px] float-left"></a>
                    <div class="ml-3 mt-2 float-left">
                        <h3 class="text-2xl "><a href="{{ route('posts.show', $post) }}" class="hover:text-blue-600">{{ \Str::limit($post->title, 35) }}</a></h3>
                        <p class="text-lg text-gray-500  mt-2">{{ \Str::limit($post->excerpt, 35) }}</p>
                        <div class="flex flex-row mt-[67px] mb-2 gap-3">
                            <div><a class='text-gray-500 text-[12px]' href="#"><span class="flex">
                                <svg class="w-[12x] h-[12px] mt-1 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z"/>
                                </svg>
                                {{ $post->created_at->diffForHumans() }}</span>
                            </a></div>
                            <div><a href="#" class="text-gray-500 text-[12px]"><span class="flex">
                                <svg class="w-[12x] h-[12px] mt-1 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                    <path d="M272 304h-96C78.8 304 0 382.8 0 480c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32C448 382.8 369.2 304 272 304zM48.99 464C56.89 400.9 110.8 352 176 352h96c65.16 0 119.1 48.95 127 112H48.99zM224 256c70.69 0 128-57.31 128-128c0-70.69-57.31-128-128-128S96 57.31 96 128C96 198.7 153.3 256 224 256zM224 48c44.11 0 80 35.89 80 80c0 44.11-35.89 80-80 80S144 172.1 144 128C144 83.89 179.9 48 224 48z"/>
                                </svg>
                                NewCastle-Founodation</span>
                            </a></div>
                            <div class="comments-count">
                                <a href="{{ route('posts.show', $post) }}#post-comments">
                                    <span  class="flex">
                                    <svg class="w-[12x] h-[12px] mt-1 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M256 32C114.6 32 .0272 125.1 .0272 240c0 47.63 19.91 91.25 52.91 126.2c-14.88 39.5-45.87 72.88-46.37 73.25c-6.625 7-8.375 17.25-4.625 26C5.818 474.2 14.38 480 24 480c61.5 0 109.1-25.75 139.1-46.25C191.1 442.8 223.3 448 256 448c141.4 0 255.1-93.13 255.1-208S397.4 32 256 32zM256.1 400c-26.75 0-53.12-4.125-78.38-12.12l-22.75-7.125l-19.5 13.75c-14.25 10.12-33.88 21.38-57.5 29c7.375-12.12 14.37-25.75 19.88-40.25l10.62-28l-20.62-21.87C69.82 314.1 48.07 282.2 48.07 240c0-88.25 93.25-160 208-160s208 71.75 208 160S370.8 400 256.1 400z"/>
                                    </svg> 
                                    {{ $post->comments_count }}</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <p class='lead'>There are no posts to show.</p>

            @endforelse


             </div>

            <!-- SIDEBAR: start -->
            <div class="ml-4">
                <div class="">
                    <div class="">
                        <h3 class="text-xl">Categories</h3>
                        <div class="">
                            <ul>
                                @foreach($categories as $category)
                                <li class="px-3 border-l-4 rounded py-1 border-white hover:border-blue-500 hover:bg-gray-300"><a href="{{ route('categories.show', $category) }}">{{ $category->name }} <span>{{ $category->posts_count }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl">Recent Blog</h3>
                        @foreach($recent_posts as $recent_post)
                        <div class="flex flex-row my-2">
                            <a href="{{ route('posts.show', $recent_post) }}">
                                <img class="w-[100px] h-[90px]" src="{{ asset($recent_post->image ? 'storage/' . $recent_post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}" alt="">
                            </a>
                            <div class="m-2">
                                <p class="text-sm text-gray-300"><span>{{ $recent_post->created_at->diffForHumans() }}</span></p>
                                <h2>
                                    <a href="{{ route('posts.show', $recent_post) }}">
                                    {{ \Str::limit( $recent_post->title, 20) }}
                                    </a>
                                </h2>
                                <p class="text-gray-500">{{ \Str::limit($recent_post->excerpt, 20) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="">
                        <h3 class="text-xl">Tags</h3>
                        <div class="m-2">
                            <ul>
                            @foreach($tags as $tag)
                                <li class="px-3 border-l-4 rounded py-1 border-white hover:border-blue-500 hover:bg-gray-300"><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></li>
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
