@extends('layouts.app')

@section('title', 'Blog')

@section('content')

    <div class="w-10/12 mx-auto mt-20">
        <div class="">
            <div class="flex md:flex-row">


                @forelse($posts as $post)
                    <div>
                        <div
                            class="lg:w-[750px] md:w-[465px] w-[309px] lg:h-[175px]  md:h-[132px] h-[230px] lg:max-h-[175px] md:max-h-[132px] max-h-[230px] lg:mr-20 border-[1px] container my-4 static flex md:flex-row flex-col">
                            <div
                                class="lg:w-[300px] md:w-[238px] w-[309px] lg:h-[175px] md:h-[130px] h-[130px] md:float-left text-ellipsis">
                                <a href="{{ route('posts.show', $post) }}" class="blog-img"><img
                                        src="{{ asset('storage/' . $post->image->path . '') }}" alt=""
                                        class="lg:w-[300px] md:w-[238px] w-[309px] lg:h-[175px] md:h-[130px] h-[130px] md:float-left"></a>
                            </div>
                            <div class="ml-3 mt-2 w-[330px] float-left static">
                                <h3 class="lg:text-2xl md:text-base h-[28px] lg:ml-0"><a
                                        href="{{ route('posts.show', $post) }}"
                                        class="hover:text-blue-600">{{ \Str::limit($post->title, 35) }}</a></h3>
                                <p class="lg:text-lg md:text-xs text-sm h-[20px] text-gray-500 lg:ml-0 md:mt-4 py-5">
                                    {{ \Str::limit($post->excerpt, 35) }}</p>
                                <div class="flex flex-row mt-5 mb-2 lg:ml-0 md:mr-2 gap-2 relative Bottom-3">
                                    <div><a class='text-gray-500 text-[10px]' href="#"><span class="flex">
                                                <svg class="w-[12x] h-[12px] mt-1 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 512 512">
                                                    <path
                                                        d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z" />
                                                </svg>
                                                {{ $post->created_at->diffForHumans() }}</span>
                                        </a></div>
                                    <div><a href="#" class="text-gray-500 text-[10px]">
                                        
                                        <span class="flex">
                                            <img src="{{"$allhome->logo"}}" class="w-[35px]" alt="Newcastle Edumed Foundation Circular Logo">
                                                NewCastle Edumed Foundation</span>
                                        </a></div>
                                    <div class="comments-count">
                                        <a href="{{ route('posts.show', $post) }}#post-comments">
                                            <span class="flex">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"
                                                    class="w-[12x] h-[12px] mt-1 mr-1">
                                                    <path
                                                        d="M208 0C322.9 0 416 78.8 416 176C416 273.2 322.9 352 208 352C189.3 352 171.2 349.7 153.9 345.8C123.3 364.8 79.13 384 24.95 384C14.97 384 5.93 378.1 2.018 368.9C-1.896 359.7-.0074 349.1 6.739 341.9C7.26 341.5 29.38 317.4 45.73 285.9C17.18 255.8 0 217.6 0 176C0 78.8 93.13 0 208 0zM164.6 298.1C179.2 302.3 193.8 304 208 304C296.2 304 368 246.6 368 176C368 105.4 296.2 48 208 48C119.8 48 48 105.4 48 176C48 211.2 65.71 237.2 80.57 252.9L104.1 277.8L88.31 308.1C84.74 314.1 80.73 321.9 76.55 328.5C94.26 323.4 111.7 315.5 128.7 304.1L145.4 294.6L164.6 298.1zM441.6 128.2C552 132.4 640 209.5 640 304C640 345.6 622.8 383.8 594.3 413.9C610.6 445.4 632.7 469.5 633.3 469.9C640 477.1 641.9 487.7 637.1 496.9C634.1 506.1 625 512 615 512C560.9 512 516.7 492.8 486.1 473.8C468.8 477.7 450.7 480 432 480C350 480 279.1 439.8 245.2 381.5C262.5 379.2 279.1 375.3 294.9 369.9C322.9 407.1 373.9 432 432 432C446.2 432 460.8 430.3 475.4 426.1L494.6 422.6L511.3 432.1C528.3 443.5 545.7 451.4 563.5 456.5C559.3 449.9 555.3 442.1 551.7 436.1L535.9 405.8L559.4 380.9C574.3 365.3 592 339.2 592 304C592 237.7 528.7 183.1 447.1 176.6L448 176C448 159.5 445.8 143.5 441.6 128.2H441.6z" />
                                                </svg>
                                                {{ $post->comments_count }}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="flex w-full justify-center">
                        <h1 class='lead text-4xl font-light text-center'>There are no posts to show</h1>
                    </div>
                @endforelse


                <!-- SIDEBAR: start -->
                <div class="lg:w-[266px] w-[175px] md:block hidden ml-auto">
                    <div class="">
                        <div class="mb-[37px]">
                            <h3 class="text-xl mb-[30px]">Categories</h3>
                            <div class="">
                                <ul>
                                    @foreach ($categories as $category)
                                        <li
                                            class="px-3 mb-[10px] border-l-4 rounded py-1 md:border-white border-blue-500 hover:border-blue-500 hover:bg-gray-300 hover:text-blue-500">
                                            <a href="{{ route('categories.show', $category) }}">{{ $category->name }}
                                                <span class="float-right">{{ $category->posts_count }}</span></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl mb-[30px]">Recent Blog</h3>
                            @foreach ($recent_posts as $recent_post)
                                <div
                                    class="flex lg:flex-row lg:w-[264px] md:w-[100px] lg:mx-0 md:mx-auto md:flex-col my-2 mb-[40px] border">
                                    <a href="{{ route('posts.show', $recent_post) }}">
                                        <img class="w-[100px] max-w-[100px] h-[90px] max-h-[90px]"
                                            src="{{ asset($recent_post->image ? 'storage/' . $recent_post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '') }}"
                                            alt="">
                                    </a>
                                    <div class="md:m-2 mx-2">
                                        <p class="md:text-sm text-xs text-gray-300">
                                            <span>{{ $recent_post->created_at->diffForHumans() }}</span>
                                        </p>
                                        <h2>
                                            <a href="{{ route('posts.show', $recent_post) }}">
                                                <span
                                                    class="md:text-base text-sm">{{ \Str::limit($recent_post->title, 20) }}
                                                </span>
                                            </a>
                                        </h2>
                                        <p class="text-gray-500 md:text-base text-xs">
                                            {{ \Str::limit($recent_post->excerpt, 20) }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="">
                            <h3 class="text-xl">Tags</h3>
                            <div class="m-2">
                                <ul class="flex flex-row flex-wrap lg:w-[250px] md:w-[100px]">
                                    @foreach ($tags as $tag)
                                        <li
                                            class="mx-1 my-1 bg-blue-500  text-white rounded px-1 hover:bg-blue-700 h-[25.5px]">
                                            <a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a>
                                        </li>
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
