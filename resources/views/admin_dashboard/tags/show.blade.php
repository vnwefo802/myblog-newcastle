@extends("admin_dashboard.layouts.app")
@section('title', 'Admin - Show Tag')
		
		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">{{ $tag->name }} Posts</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Tag Posts</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->
			  
				<div class="card">
					<div class="card-body">
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="{{ route('admin.posts.create') }}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Post</a></div>
						</div>
						<div class="table-responsive">
							<table class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Post#</th>
										<th>Post Title</th>
										<th>Post Excerpt</th>
										<th>Category</th>
										<th>Created at</th>
                                        <th>Status</th>
										<th>Views</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($tag->posts as $post)
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#P-{{ $post->id }}</h6>
												</div>
											</div>
										</td>
										<td>{{ \Str::limit($post->title, 30) }} </td>

										<td>{{ \Str::limit($post->title, 30) }}</td>
                                        <td>{{ $post->category->name }}</td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>
                                        
                                        
                                        <td>
                                            <div class="badge rounded-pill @if($post->status === 'published') {{ 'text-info bg-light-info' }} @elseif($post->status === 'draft') {{ 'text-warning bg-light-warning' }} @else {{ 'text-danger bg-light-danger' }} @endif p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>{{ $post->status }}</div>
                                        </td>

                                        <td>{{ $post->views }}</td>
                                        
                                        <td>
											<div class="d-flex order-actions">
                                                <form method='post' action="{{ route('admin.posts.destroy', $post) }}" id='delete_form_{{ $post->id }}' class="confirmDelete">
                                                    @csrf @method('DELETE')
                                                    
                                                    <a href="{{ route('admin.posts.edit', $post) }}" class=""><i class='bx bxs-edit'></i></a>
                                                    <button type="submit" class="ms-3 "><i class='bx bxs-trash'></i></button>
                                                
                                                
                                                </form>
                                            </div>
										</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>
					</div>
				</div>


			</div>
		</div>
		<!--end page wrapper -->
		@endsection
	

    @section("script")

    @if (session('success') == 'Tag has been Deleted.')
    <script>
        Swal.fire(
          'Deleted!',
          'Tag has been deleted.',
          'success'
        )
    </script>
    @endif

    <script>
        $(document).ready(function () {
            
            // search
            // var table = $('#example2').DataTable( {
			// 	lengthChange: false,
			// 	buttons: ['excel']
			// } );
            // end search

            setTimeout(() => {
                $(".general-message").fadeOut();
            }, 5000);

        });



        $('.confirmDelete').submit(function(e){
                e.preventDefault();
                Swal.fire({
      title: 'Sure you want to delete this Tag Post?',
      text: "You won't be able to revert this Tag Post!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#d33',
      cancelButtonColor: '#3085d6',
      confirmButtonText: 'Yes, delete it!',
      cancelButtonText: 'No, cancel'

    }).then((result) => {
      if (result.isConfirmed) {
      /*  Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        ) */
        this.submit();
      }

    })

    });
    </script>
    @endsection