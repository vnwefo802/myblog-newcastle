@extends('main_layouts.master')

@section('title', $post->title . ' | MyBlog')

@section('custom_css')

	<style>
		.class-single .desc img {
			width: 100%;
		}
	</style>

@endsection

@section('content')


<div class="colorlib-classes">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<div class="row row-pb-lg">
							<div class="col-md-12 animate-box">
								<div class="classes class-single">
									<div class="classes-img" style="background-image: url({{ asset($post->image ? 'storage/' . $post->image->path : 'storage/placeholders/thumbnail_placeholder.svg' . '')  }});">
									</div>
                                    <div> {{ $post->title }}</div>

                                    {{-- clock goes here --}}
                                    <div>
                                        <p> 
                                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 float-left mt-3 mr-1">
                                                 <path class="fill-gray-100" d="M232 120C232 106.7 242.7 96 256 96C269.3 96 280 106.7 280 120V243.2L365.3 300C376.3 307.4 379.3 322.3 371.1 333.3C364.6 344.3 349.7 347.3 338.7 339.1L242.7 275.1C236 271.5 232 264 232 255.1L232 120zM256 0C397.4 0 512 114.6 512 256C512 397.4 397.4 512 256 512C114.6 512 0 397.4 0 256C0 114.6 114.6 0 256 0zM48 256C48 370.9 141.1 464 256 464C370.9 464 464 370.9 464 256C464 141.1 370.9 48 256 48C141.1 48 48 141.1 48 256z"/>
                                             </svg>Posted {{ $post->created_at->diffForHumans() }}
                                         </p>
                                    </div>
                                     <div class="desc desc2">
										{!! $post->body !!}
									</div>
								</div>
							</div>
						</div>
						<div class="row row-pb-lg animate-box">

							<div class="col-md-12">
								<h2 class="colorlib-heading-2">{{ count($post->comments) }} Comments</h2>

								@foreach($post->comments as $comment)
								<div id="comment_{{ $comment->id }}" class="review">
							   		<div 
							   		class="user-img" 
							   		style="background-image: url({{ $comment->user->image ? asset('storage/' . $comment->user->image->path. '') : 'https://images.assetsdelivery.com/compings_v2/salamatik/salamatik1801/salamatik180100019.jpg'  }});"></div>
							   		<div class="desc">
							   			<h4>
							   				<span class="text-left">{{ $comment->user->name }}</span>
							   				<span class="text-right">{{ $comment->created_at->diffForHumans() }}</span>
							   			</h4>
							   			<p>{{ $comment->the_comment }}</p>
							   			<p class="star">
						   					<span class="text-left"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
							   			</p>
							   		</div>
							   	</div>
							   	@endforeach


							</div>
						</div>
				
						<div class="row animate-box">
							<div class="col-md-12">

								<x-blog.message :status="'success'"/>

								<h2 class="colorlib-heading-2">Say something</h2>

								@auth

								<form method="POST" action="{{ route('posts.add_comment', $post) }}">
									@csrf
									
									<div class="row form-group">
										<div class="col-md-12">
											<!-- <label for="message">Message</label> -->
											<textarea name="the_comment" id="the_comment" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>
										</div>
									</div>
									<div class="form-group">
										<input type="submit" value="Post Comment" class="btn btn-primary">
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
					<div class="col-md-4 animate-box">
						<div class="sidebar">

							<x-blog.side-categories :categories="$categories"/>

		                    <x-blog.side-recent-posts :recentPosts="$recent_posts"/>

		                    <x-blog.side-tags :tags="$tags"/>
		                    
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