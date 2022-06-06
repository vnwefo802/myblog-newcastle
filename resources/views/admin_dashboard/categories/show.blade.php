@extends("admin_dashboard.layouts.app")

		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">{{ $category->name }} Posts</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Category Posts</li>
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
                                    @foreach($category->posts as $post)
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
										<td>{{ \Str::limit($post->title, 30)  }} </td>

										<td>{{ \Str::limit($post->excerpt, 30) }}</td>
                                        <td>{{ \Str::limit($post->category->name, 17) }}</td>
                                        <td>{{ $post->created_at->diffForHumans() }}</td>


                                        <td>
                                            <div class="badge rounded-pill @if($post->status === 'published') {{ 'text-info bg-light-info' }} @elseif($post->status === 'draft') {{ 'text-warning bg-light-warning' }} @else {{ 'text-danger bg-light-danger' }} @endif p-2 text-uppercase px-3"><i class='bx bxs-circle align-middle me-1'></i>{{ $post->status }}</div>
                                        </td>

                                        <td>{{ $post->views }}</td>

                                        <td>
											<div class="d-flex order-actions">
                                                {{-- Edit --}}
												<a href="{{ route('admin.posts.edit', $post) }}" class=""><i class='bx bxs-edit'></i></a>

                                                <form method='post' action="{{ route('admin.posts.destroy', $post) }}" id='delete_form_{{ $post->id }}' class="confirmDelete">@csrf @method('DELETE')
                                                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $post->id }}').submit();" class="ms-3 "><i class='bx bxs-trash'></i></a>

                                                    {{-- <button type="submit"class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none active:bg-red-200 hover:shadow-lg focus:outline-none" href="javascript: void(0)">
                                                        <div aria-label="Delete" role="button" class="p-2 text-red-500 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                                        </div>
                                                    </button> --}}
                                                    
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
{{-- sweetalert --}}
    @if (session('success') == 'Category has been Deleted.')
    <script>
        Swal.fire(
          'Deleted!',
          'Post has been deleted.',
          'success'
        )
    </script>
    @endif

    <script>
        $(document).ready(function () {

            setTimeout(() => {
                $(".general-message").fadeOut();
            }, 5000);

        });

        // sweetalert
        $('.confirmDelete').submit(function(e){
            e.preventDefault();
            Swal.fire({
  title: 'Are you sure you want to delete this Post?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#d33',
  cancelButtonColor: '#3085d6',
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel'

}).then((result) => {
  if (result.isConfirmed) {
    this.submit();
  }

})

});

    </script>
    @endsection
