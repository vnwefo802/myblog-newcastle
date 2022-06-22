@extends("admin_dashboard.layouts.app")
@section('title', 'Admin - Posts')
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link href="{{ asset('admin_dashboard_assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />

       @section("wrapper")
<div class="page-wrapper">
   <div class="page-content">
       <div class="container mx-auto bg-white rounded shadow dark:bg-gray-800">
           <div class="flex flex-col items-start justify-between w-full pt-8 pb-4 lg:flex-row lg:items-stretch">
               <div class="float-left w-full gap-2 lg:flex-row lg:items-center">
                   <a href="{{ route('admin.categories.create') }}" class="float-left">
                       <button class="float-left py-2 my-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-transparent rounded focus:shadow-outline-gray w-44 lg:w-1/4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600" > <a href="{{ route('admin.posts.create') }}"> Add New Post </button> </a>
                   </a>
               </div>
           </div>
           <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
               <table id="example2" class="min-w-full bg-white rounded dark:bg-gray-800">
                   <thead>
                       <tr class="w-full h-16 py-8 border-b border-gray-300 dark:border-gray-200 bg-indigo-50">
                           <th role="columnheader" class="pl-8 pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Post ID</th>
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">POST Author</th>
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">	Post Title</th>
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Post Excerpt</th>
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Category Name</th>
                           {{-- <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Tag</th> --}}
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Created </th>
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Status</th>
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Views</th>
                           <th role="columnheader" class="pr-6 text-sm font-normal leading-4 tracking-normal text-left text-gray-600">Actions</th>
                       </tr>
                   </thead>
                   <tbody role="rowgroup" >
                       @foreach($posts as $post)

                       <tr role="row" class="h-24 transition duration-150 ease-in-out border-t border-b border-gray-300 cursor-pointer hover:border-indigo-300 hover:shadow-md">
                           <td class="pl-8 pr-6 text-sm leading-4 tracking-normal text-left text-gray-800 whitespace-no-wrap ">{{ $post->id }}</td>

                           <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ \Str::limit($post->author->name, 15) }}</td>
                           <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ \Str::limit($post->title, 30) }}</td>


                           <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">{{ \Str::limit($post->excerpt, 30) }}</td>

                           <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap "> {{ \Str::limit($post->category->name, 15) }}</td>
                           <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap "> {{ $post->created_at->diffForHumans() }}</td>

                           <td>
                               <div class="badge rounded-pill @if($post->status === 'published') {{ 'text-info bg-light-info' }} @elseif($post->status === 'draft') {{ 'text-warning bg-light-warning' }} @else {{ 'text-danger bg-light-danger' }} @endif p-2 text-uppercase px-3"><i class='align-middle bx bxs-circle me-1'></i>{{ $post->status }}</div>
                           </td>

                           <td  class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap " >{{ $post->views }}</td>

                            <td class="pr-6 text-sm leading-4 tracking-normal text-gray-800 whitespace-no-wrap ">
                                <div class="flex items-center">
                                    <form method='post' action="{{ route('admin.posts.destroy', $post) }}" id='delete_form_{{ $post->id }}' class="confirmDelete">@csrf @method('DELETE')
                                        <div>
                                            {{-- Edit --}}
                                            <a  href="{{ route('admin.posts.edit', $post) }}">
                                                <div aria-label="Edit row" role="button" class="mb-3 mr-1 transition-all duration-150 ease-linear rounded shadow outline-none hover:bg-gray-200 active:bg-blue-200 w-[36px] mt-2">
                                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit" class="p-2 m-0">
                                                </div>
                                            </a>

                                            {{-- <a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $post->id }}').submit();" > --}}

                                            {{-- Delete --}}
                                            <button type="submit" class="mb-1 mr-1 transition-all duration-150 ease-linear rounded shadow outline-none active:bg-red-500 hover:shadow-lg focus:outline-none hover:bg-red-200" href="javascript: void(0)">
                                                <div aria-label="Delete" role="button" class="p-2 text-red-500 rounded cursor-pointer hover:bg-gray-200">
                                                    <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                                </div>
                                            </button>
                                        </div>
                                        {{-- </a> --}}
                                        <div class="mb-3">
                                            <div class="form-check">
                                                <label for="flexSwitchCheckChecked" class="form-check-label {{ $post->approved ? 'text-success' : 'text-warning'}}" >{{ $post->approved ? 'Approved' : 'Not approved' }}
                                                </label>
                                            </div>
                                        </div>
                                    </form>
                               </div>
                           </td>
                       </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
            <div class='mt-4'>
                {{ $posts->links() }}
                </div>
       </div>

   </div>
</div>
<!--end page wrapper -->
@endsection


@section("script")
<script src="{{ asset('admin_dashboard_assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>


@if (session('success') == 'Post has been Deleted')
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

            console.log(table);
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
