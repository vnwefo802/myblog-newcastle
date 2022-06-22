@extends("admin_dashboard.layouts.app")
@section('title', 'Admin - Users')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
@section("style")
<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection
        @section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mx-auto bg-white rounded shadow dark:bg-gray-800">
            <div class="flex flex-col items-start w-full pt-8 pb-4 lg:flex-row lg:items-stretch">
                <div class="flex flex-col items-start w-full gap-2 lg:flex-row lg:items-center">
                    <a href="{{ route('admin.users.create') }}" class=" w-[162px] h-[38px]">
                        <button class="py-2 px-3 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-transparent rounded focus:shadow-outline-gray focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 w-[162px] h-[38px]" > Add New Post </button>
                    </a>
                </div>
            </div>
            <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
                <table id="example2" class="min-w-full bg-white rounded dark:bg-gray-800">
                    <thead>
                        <tr class="w-full h-16 py-8 border-b border-gray-300 dark:border-gray-200 bg-indigo-50">
                            <th role="columnheader" class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">User ID</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">User Name</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600 ">User Email</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Role</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Related Posts</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Created at</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody role="rowgroup" >
                    @foreach($users as $user)

                        <tr role="row" class="h-24 transition duration-150 ease-in-out border-t border-b border-gray-300 cursor-pointer hover:border-indigo-300 hover:shadow-md">
                            <td class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap ">{{ $user->id }}</td>

                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ \Str::limit($user->name, 15) }} </td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap w-[200px]">{{ \Str::limit($user->email, 30) }}</td>


                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ $user->role->name }}</td>
                            <td class="pr-6">
                                <a class='w-[100px] py-2 bg-blue-500 text-white border-2 border-blue-500 hover:bg-blue-700 focus:border-blue-900 whitespace-nowrap' href="{{ route('admin.users.show', $user) }}">Related Posts</a>
                            </td>
                            <td class="pr-6">{{ $user->created_at->diffForHumans() }}</td>

                            <td class="text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                <div class="flex items-center">

                                    {{-- edit --}}
                                    <a href="{{ route('admin.users.edit', $user) }}">
                                        <div aria-label="Edit row" role="button" class="mb-3 mr-1 transition-all duration-150 ease-linear rounded shadow outline-none hover:bg-gray-200 active:bg-blue-200">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit" class="p-2">
                                        </div>
                                    </a>

                                    <form method='post' action="{{ route('admin.users.destroy', $user) }}" id='delete_form_{{ $user->id }}' class="confirmDelete">@csrf @method('DELETE')

                                        {{-- Delete --}}
                                        <button type="submit"class="mb-1 mr-1 transition-all duration-150 ease-linear rounded shadow outline-none  active:bg-red-500 hover:shadow-lg focus:outline-none hover:bg-red-200" href="javascript: void(0)">
                                            <div aria-label="Delete" role="button" class="p-2 text-red-500 rounded cursor-pointer hover:bg-gray-200">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
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
            <div class='mt-4'>
                {{ $users->links() }}
                </div>

       	</div>
				</div>
			</div>
		</div>

        <!--end page wrapper -->
        @endsection


    @section("script")
<script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>


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
  title: 'Are you sure you want to delete this User?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
    this.submit();
  }

})

});

    </script>
    @endsection
