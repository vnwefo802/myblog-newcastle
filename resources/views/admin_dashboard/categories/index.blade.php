@extends("admin_dashboard.layouts.app")
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

		@section("wrapper")



<div class="page-wrapper">
    <div class="page-content">
        <div class="container mx-auto bg-white rounded shadow dark:bg-gray-800">
            <div class="flex flex-col w-full pt-8 lg:flex-row lg:items-stretch">
                <div class="items-start w-full gap-2 lg:flex-row lg:items-center">
                    <a href="{{ route('admin.categories.create') }}">
                        <button class="py-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-transparent rounded focus:shadow-outline-gray w-44 lg:w-1/4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600" > <a href="{{ route('admin.categories.create') }}"> Add New Category </button> </a>
                    </a>
                </div>
            </div>
            <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
                <table id="example2" class="min-w-full bg-white rounded dark:bg-gray-800">
                    <thead>
                        <tr class="w-full h-16 py-8 border-b border-gray-300 dark:border-gray-200 bg-indigo-50">
                            <th role="columnheader" class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Created at</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Category Name</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Category description</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Creator</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Created At</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Related Posts</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody role="rowgroup" >
                        @foreach ($categories as $category)
                        <tr role="row" class="h-24 transition duration-150 ease-in-out border-t border-b border-gray-300 cursor-pointer hover:border-indigo-300 hover:shadow-md">
                            <td class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap ">{{$category->id}}</td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ $category->user->name }}</td>
                            <td class="pr-6">
                                {{$category->name}}
                            </td>
                            <td class="pr-6">
                                {{$category->short_description}}
                            </td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ $category->created_at->diffForHumans() }}</td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">  <a class='btn btn-primary btn-sm' href="{{ route('admin.categories.show', $category) }}">Related Posts</a></td>
                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                <div class="flex items-center">

                                    {{-- Edit Categories --}}
                                    <a  href="{{ route('admin.categories.edit', $category) }}">
                                        <div aria-label="Edit row" role="button" class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none hover:bg-gray-200 active:bg-blue-200">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit">
                                        </div>
                                    </a>

                                    <form method='post' action="{{ route('admin.categories.destroy', $category) }}" id='delete_form_{{ $category->id }}' class="confirmDelete">@csrf @method('DELETE')
                                        {{-- Delete Categories --}}
                                        <button type="submit"class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none active:bg-red-500 hover:shadow-lg focus:outline-none hover:bg-red-200" href="javascript: void(0)">
                                            <div aria-label="Delete" role="button" class="p-2 text-red-500  rounded cursor-pointer hover:bg-gray-200">
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
            {{ $categories->links() }}
        </div>
        <div class="container flex items-center justify-center pt-8 mx-auto sm:justify-end">
            <a class="mr-2 text-gray-600 border border-transparent rounded sm:mr-5 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="Previous Page" role="link" href="javascript: void(0)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg7.svg" alt="Previous">
            </a>
            <p class="text-base text-gray-800 fot-normal">Page</p>
            <label for="selectedPage" class="hidden"></label>
            <input placeholder="0" id="selectedPage" type="text" class="flex items-center w-8 px-2 mx-2 text-base font-normal text-gray-800 bg-white border border-gray-300 rounded dark:bg-gray-800 focus:outline-none focus:shadow-outline-gray focus:border focus:border-indigo-700" value="4" />
            <p class="text-base text-gray-800 fot-normal">of 20</p>
            <a class="mx-2 text-gray-600 border border-transparent rounded sm:mx-5 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="Next Page" role="link" href="javascript: void(0)">
                <img class="transform rotate-180" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg7.svg" alt="Previous">
            </a>
            <label for="totalPage" class="hidden"></label>
            <input placeholder="0" id="totalPage" type="text" class="flex items-center w-10 px-2 mr-2 text-base font-normal text-gray-800 bg-white border border-gray-300 rounded dark:bg-gray-800 focus:outline-none focus:shadow-outline-gray focus:border focus:border-indigo-700" value="30" />
            <p class="-mt-1 text-base text-gray-800 fot-normal">per page</p>
        </div>
    </div>
</div>

@endsection


@section("script")
<script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>

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
