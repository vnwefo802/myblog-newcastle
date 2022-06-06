@extends("admin_dashboard.layouts.app")
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

		@section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mx-auto bg-white rounded shadow dark:bg-gray-800 pt-4">
            <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
                <table id="example2" class="min-w-full bg-white rounded dark:bg-gray-800">
                    <thead>
                        <tr class="w-full h-16 py-8 border-b border-gray-300 dark:border-gray-200 bg-indigo-50">
                            <th role="columnheader" class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Tags ID</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Tags Name</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Related posts</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Created at</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody role="rowgroup" >
					@foreach($tags as $tag)

                        <tr role="row" class="h-24 transition duration-150 ease-in-out border-t border-b border-gray-300 cursor-pointer hover:border-indigo-300 hover:shadow-md">
                            <td class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap ">{{ $tag->id }}</td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ $tag->name }}  </td>

							<td>
								<a class='w-[100px] p-2 bg-blue-500 text-white border-2 border-blue-500 hover:bg-blue-700 focus:border-blue-900' href="{{ route('admin.tags.show', $tag) }}">Related Posts</a>
							</td>
							<td>{{ $tag->created_at->diffForHumans() }}</td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                <div class="flex items-center">
									{{-- <a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $tag->id }}').submit();" >
                                        <button type="submit"class="w-[26px] h-[26px]" href="javascript: void(0)">
                                            <div aria-label="Delete" role="button" class="w-[26px] h-[26px] mt-1 text-indigo-700 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                                    <img class="w-[25px] h-[25px]" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                            </div>
                                        </button>
                                    </a> --}}

                                    {{-- Delete --}}
                                    <form method='post' action="{{ route('admin.tags.destroy', $tag) }}" id='delete_form_{{ $tag->id }}' class="confirmDelete">@csrf @method('DELETE')
                                        <button type="submit"class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none active:bg-red-200 hover:shadow-lg focus:outline-none"href="javascript: void(0)">
                                            <div aria-label="Delete" role="button" class="w-[26px] h-[26px] mt-1 text-indigo-700  rounded cursor-pointer hover:bg-gray-200">
                                                    <img class="w-[25px] h-[25px]" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                            </div>
                                        </button>
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
            var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: ['excel']
			} );
            // end search

            setTimeout(() => {
                $(".general-message").fadeOut();
            }, 5000);

        });



        $('.confirmDelete').submit(function(e){
                e.preventDefault();
                Swal.fire({
      title: 'Are you sure you want to delete this Tag?',
      text: "You won't be able to revert this!",
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


