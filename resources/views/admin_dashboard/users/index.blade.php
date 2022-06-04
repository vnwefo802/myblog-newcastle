@extends("admin_dashboard.layouts.app")

        @section("wrapper")
<div class="page-wrapper">
    <div class="page-content">
        <div class="container mx-auto bg-white rounded shadow dark:bg-gray-800">
            <div class="flex flex-col items-start justify-between w-full p-8 lg:flex-row lg:items-stretch">
                <div class="flex flex-col items-start justify-end w-full gap-2 lg:ml-24 lg:flex-row lg:items-center">
                    <div class="flex flex-col items-start w-full lg:w-1/4 xl:w-1/3 lg:flex-row lg:items-center">
                        <div class="relative w-full mb-2 lg:mb-0">
                            <div class="absolute flex items-center h-full pl-4 text-gray-600 right-2 dark:text-gray-400">
                                <button class="bg-gray-100 border-2 border-gray-100 rounded focus:bg-gray-300 focus:border-gray-300 active:bg-gray-200 active:border-gra-200">
                                    <img class="dark:hidden" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1.svg" alt="search">
                                    <img class="hidden dark:block" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1dark.svg" alt="search">
                                </button>
                            </div>
                            <label for="search" class="hidden"></label>
                            <input placeholder="Search" id="search" class="flex items-center w-full h-10 pl-2 text-sm font-normal text-gray-600 bg-gray-100 border border-gray-300 rounded dark:bg-gray-700 dark:text-gray-400 focus:outline-none focus:border focus:border-indigo-700 dark:border-gray-200" placeholder="Search" />
                        </div>
                    </div>
                    <button class="flex flex-row px-2 py-2 my-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-transparent rounded focus:shadow-outline-gray w-44 lg:w-24 lg:my-0 lg:ml-7 xl:ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600">
                        <img class="px-2" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg1dark.svg" alt="search">search
                    </button>
                    <a href="{{ route('admin.users.create') }}" class=" w-[162px] h-[38px]">
                        <button class="py-2 px-3 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-transparent rounded focus:shadow-outline-gray lg:my-0 lg:ml-2 xl:ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600 w-[162px] h-[38px]" > Add New Post </button>
                    </a>
                </div>
            </div>
            <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
                <table class="min-w-full bg-white rounded dark:bg-gray-800">
                    <thead>
                        <tr class="w-full h-16 py-8 border-b border-gray-300 dark:border-gray-200 bg-indigo-50">
                            <th role="columnheader" class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">User ID</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Image</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">User Name</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">User Email</th>
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
                            <td>
                                <img class="w-16" src="{{ $user->image ? asset('storage/' . $user->image->path) : asset('storage/placeholders/user_placeholder.jpg') }}">
                            </td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ \Str::limit($user->name, 15) }} </td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ \Str::limit($user->email, 30) }}</td>


                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ $user->role->name }}</td>
                            <td>
                                <a class='w-[100px] p-2 bg-blue-500 text-white border-2 border-blue-500 hover:bg-blue-700 focus:border-blue-900' href="{{ route('admin.users.show', $user) }}">Related Posts</a>
                            </td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>

                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                <div class="flex items-center">

                                    <a  href="{{ route('admin.users.edit', $user) }}">
                                        <div aria-label="Edit row" role="button" class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none hover:bg-gray-200 active:bg-blue-200">
                                            <img class="w-[25px] h-[25px]" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit">
                                        </div>
                                    </a>
                                    {{-- Delete --}}
                                    <form method='post' action="{{ route('admin.users.destroy', $user) }}" id='delete_form_{{ $user->id }}' class="confirmDelete">@csrf @method('DELETE')

                                       <button type="submit"class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none active:bg-red-200 hover:shadow-lg focus:outline-none" href="javascript: void(0)">
                                            <div aria-label="Delete" role="button" class="w-[26px] h-[26px] mt-1 text-indigo-700  rounded cursor-pointer hover:bg-red-500-200">
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
        <!--end page wrapper -->
        @endsection


    @section("script")

    <script>
        $(document).ready(function () {

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
