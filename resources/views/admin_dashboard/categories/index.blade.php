@extends("admin_dashboard.layouts.app")
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

@section('title', 'Admin - Categories')
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
                            <th role="columnheader" class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">ID</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Creator</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Category Name</th>
                            <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Category description</th>
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
                            <td class="text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                <div class="flex items-center">

                                    {{-- Edit Categories --}}
                                    <a  href="{{ route('admin.categories.edit', $category) }}">
                                        <div aria-label="Edit row" role="button" class="mb-3 mr-1 transition-all duration-150 ease-linear rounded shadow outline-none hover:bg-gray-200 active:bg-blue-200">
                                            <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit" class="p-2">
                                        </div>
                                    </a>

                                    <form method='post' action="{{ route('admin.categories.destroy', $category) }}" id='delete_form_{{ $category->id }}' class="confirmDelete">@csrf @method('DELETE')
                                        {{-- Delete Categories --}}
                                        <button type="submit"class="mb-1 mr-1 transition-all duration-150 ease-linear rounded shadow outline-none active:bg-red-500 hover:shadow-lg focus:outline-none hover:bg-red-200" href="javascript: void(0)">
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
                {{-- {{ $categories->links() }} --}}
                </div>
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
