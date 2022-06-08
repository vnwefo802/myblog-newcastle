@extends("admin_dashboard.layouts.app")
@section('title', 'Admin - Edit Volunteer Page')

    @section("style")
	<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
	@endsection


		@section("wrapper")
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="mb-3 page-breadcrumb d-none d-sm-flex align-items-center">
					<div class="breadcrumb-title pe-3">volunteers</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="p-0 mb-0 breadcrumb">
								<li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">All volunteers</li>
							</ol>
						</nav>
					</div>
				</div>
				<!--end breadcrumb-->

				<div class="card">
					<div class="card-body">
                    <div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example2" class="table table-striped table-bordered">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Subject</th>
										<th>Message</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
                                    @foreach($volunteers as $volunteer)
									<tr>
										<td>{{ $volunteer->first_name }}</td>
										<td>{{ $volunteer->last_name }}</td>
										<td>{{ $volunteer->email }}</td>
										<td>{{ $volunteer->phone_number }}</td>
										<td>{{ $volunteer->country }}</td>
										<td>
											<div class="d-flex order-actions">
												<a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $volunteer->id }}').submit();" class="ms-3"><i class='bx bxs-trash'></i></a>

                                                <form method='post' action="{{ route('admin.volunteer.destroy', $volunteer) }}" id='delete_form_{{ $volunteer->id }}'>@csrf @method('DELETE')</form>
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


			</div>
		</div>
		<!--end page wrapper -->
		@endsection


    @section("script")

    <script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
	{{-- <script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script> --}}
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: ['excel']
			} );



            setTimeout(() => {
                $(".general-message").fadeOut();
            }, 5000);

        });
	</script>
    @endsection
