@extends("admin_dashboard.layouts.app")
@section('title', 'Admin - Roles')
<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
					<div class="breadcrumb-title pe-3">Roles</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="p-0 mb-0 breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All Roles</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
						<div class="gap-3 mb-4 d-lg-flex align-items-center">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="{{ route('admin.roles.create') }}" class="mt-2 btn btn-primary radius-30 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New Role</a></div>
						</div>
						<div class="table-responsive">
							<table id="example2" class="table mb-0">
								<thead class="table-light">
									<tr>
										<th>Role#</th>
										<th>Role Name</th>
										<th>Created at</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($roles as $role)
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div>
													<input class="form-check-input me-3" type="checkbox" value="" aria-label="...">
												</div>
												<div class="ms-2">
													<h6 class="mb-0 font-14">#P-{{ $role->id }}</h6>
												</div>
											</div>
										</td>
										<td>{{ $role->name }} </td>
                                        <td>{{ $role->created_at->diffForHumans() }}</td>
                                        <td>
											<div class="d-flex order-actions">
												<a href="{{ route('admin.roles.edit', $role) }}" class=""><i class='bx bxs-edit'></i></a>
												<a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $role->id }}').submit();" class="ms-3"><i class='bx bxs-trash'></i></a>

                                                <form method='post' action="{{ route('admin.roles.destroy', $role) }}" id='delete_form_{{ $role->id }}' class="confirmDelete">@csrf @method('DELETE')</form>
                                            </div>
										</td>
									</tr>
                                    @endforeach
								</tbody>
							</table>
						</div>

                        <div class='mt-4'>
                        {{ $roles->links() }}
                        </div>

					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
		@endsection


    @section("script")
    <script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>



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
