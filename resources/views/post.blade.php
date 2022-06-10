@extends('layouts.app')

@section('title', $post->title . ' | Blog')

@section('custom_css')

	<style>
		.class-single .desc img {
			width: 100%;
		}
	</style>

@endsection

@section('content')


<div class="pt-[68px]">
	<div class="w-10/12 mx-auto">
		<div class="flex flex-row ">
			<div class="lg:w-[780px] ">
				<div>
					<div class="px-[15px]">
						<div class="pb-[119px]">
							<div>
								<img src="{{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}" alt="" class="m-auto">
							</div>
							<div class="mt-9"> 
								<h1 class="text-4xl uppercase font-bold">{{ $post->title }}</h1>
							</div>
							{{-- clock goes here --}}
							<div class="mt-4">
								<p> 
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[14px] h-[14px] float-left mt-[5px] mr-3 ">
										<path class="fill-gray-500" d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z"/>
									</svg><span class="text-[14px] text-gray-500">Posted {{ $post->created_at->diffForHumans() }}</span>
								</p>
							</div>
							<div class="pt-[34px] text-gray-500">
								{!! $post->body !!}
							</div>
						</div>
					</div>
				</div>
				<div class="pb-28">
					<div class="">
						<h2 class="text-[30px] font-[400px]">{{ count($post->comments) }} Comments</h2>

						@foreach($post->comments as $comment)
						<div id="comment_{{ $comment->id }}" class="flex flex-row p-1">
							<div class=" pr-2 min-w-[65px] min-h-[65px] max-h-[65px] max-w-[65px]">
								<img class="" src="{{ $comment->user->image ? asset('storage/' . $comment->user->image->path. '') : 'https://images.assetsdelivery.com/compings_v2/salamatik/salamatik1801/salamatik180100019.jpg'  }}" alt="">
							</div>
							<div class="flex flex-col">
								<div class="relative">
									<h4 class="float-left">{{ $comment->user->name }}</h4>
									<h4 class="float-right">{{ $comment->created_at->diffForHumans() }}</h4>
								</div>
								<div class="pt-2">
									<p>{{ $comment->the_comment }}</p>
									<a >
										<button class="w-[20px] h-[20px] p-auto bg-gray-300">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-[12px] h-[12px] m-auto rotate-180 fill-gray-400">
												<path d="M8.31 189.9l176-151.1c15.41-13.3 39.69-2.509 39.69 18.16v80.05C384.6 137.9 512 170.1 512 322.3c0 61.44-39.59 122.3-83.34 154.1c-13.66 9.938-33.09-2.531-28.06-18.62c45.34-145-21.5-183.5-176.6-185.8v87.92c0 20.7-24.31 31.45-39.69 18.16l-176-151.1C-2.753 216.6-2.784 199.4 8.31 189.9z"/>
											</svg>
										</button>
									</a>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
				<div class="">
					<div class="">

						<x-blog.message :status="'success'"/>

						<h2 class="text-2xl">Say something</h2>

						@auth

						<form method="POST" action="{{ route('posts.add_comment', $post) }}">
							@csrf
							
							<div class=" mt-2">
								<div class="">
									<!-- <label for="message">Message</label> -->
									<textarea name="the_comment" id="the_comment" class="w-full h-24 border-2 p-1" placeholder="Say something about us"></textarea>
								</div>
							</div>
							<div class="form-group">
								<input type="submit" value="Post Comment" class="border-2 hover:bg-gray-600 p-2 rounded hover:text-white focus:border-gray-700 ml-3 mb-4">
							</div>
						</form>

						@endauth

						@guest
						<p class="lead"><a href="{{ route('login') }}">Login </a> OR <a href="{{ route('register') }}">Register</a> to write comments</p>
						@endguest	
					</div>
				</div>
			</div>

			<!-- SIDEBAR: start -->
			<div class="ml-4 md:block hidden lg:w-[266px] w-[175px]  mt-4">
                <div class="">
                    <div class="mb-[37px]">
                        <h3 class="text-xl mb-[30px]">Categories</h3>
                        <div class="">
                            <ul>
                                @foreach($categories as $category)
                                <li class="px-3 mb-[10px] border-l-4 rounded py-1 md:border-white border-blue-500 hover:border-blue-500 hover:bg-gray-300 hover:text-blue-500"><a href="{{ route('categories.show', $category) }}">{{ $category->name }} <span class="float-right">{{ $category->posts_count }}</span></a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl mb-[30px]">Recent Blog</h3>
                        @foreach($recent_posts as $recent_post)
                        <div class="flex lg:flex-row lg:w-[264px] md:w-[100px] lg:mx-0 md:mx-auto md:flex-col my-2 mb-[40px] border">
                            <a href="{{ route('posts.show', $recent_post) }}">
                                <img class="w-[100px] max-w-[100px] h-[90px] max-h-[90px]" src="{{ asset($recent_post->image ? 'storage/' . $recent_post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }}" alt="">
                            </a>
                            <div class="md:m-2 mx-2">
                                <p class="md:text-sm text-xs text-gray-300"><span>{{ $recent_post->created_at->diffForHumans() }}</span></p>
                                <h2>
                                    <a href="{{ route('posts.show', $recent_post) }}">
                                        <span class="md:text-base text-sm">{{ \Str::limit( $recent_post->title, 20) }} </span>
                                    </a>
                                </h2>
                                <p class="text-gray-500 md:text-base text-xs">{{ \Str::limit($recent_post->excerpt, 20) }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="">
                        <h3 class="text-xl">Tags</h3>
                        <div class="m-2">
                            <ul class="flex flex-row flex-wrap w-[250px]">
                            @foreach($tags as $tag)
                                <li class="mx-1 my-1 bg-blue-500 text-white rounded px-1 hover:bg-blue-700 h-[25.5px]"><a href="{{ route('tags.show', $tag) }}">{{ $tag->name }}</a></li>
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

@section('custom_js')

<script>
	setTimeout(() => {
		$(".global-message").fadeOut();
	}, 5000);
</script>

@endsection