@extends("admin_dashboard.layouts.app")
 <link rel="stylesheet" href="{{ asset('css/app.css') }}">

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
                    <a href="{{ route('admin.categories.create') }}">
                        <button class="py-2 my-2 text-sm text-white transition duration-150 ease-in-out bg-indigo-700 border border-transparent rounded focus:shadow-outline-gray w-44 lg:w-1/4 lg:my-0 lg:ml-2 xl:ml-4 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 hover:bg-indigo-600" > <a href="{{ route('admin.posts.create') }}"> Add New Post </button> </a>
                    </a>
                </div>
            </div>
            <div class="w-full overflow-x-scroll xl:overflow-x-hidden">
                <table class="min-w-full bg-white rounded dark:bg-gray-800">
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
                                    <a  href="{{ route('admin.posts.edit', $post) }}">
                                        <div aria-label="Edit row" role="button" class="w-[26px] h-[26px] text-indigo-700 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                            <img class="w-[25px] h-[25px]" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg4.svg" alt="Edit">
                                        </div>
                                    </a>

                                    <a href="#" onclick="event.preventDefault(); document.getElementById('delete_form_{{ $post->id }}').submit();" >
                                        <button type="submit"class="w-[26px] h-[26px]" href="javascript: void(0)">
                                            <div aria-label="Delete" role="button" class="w-[26px] h-[26px] text-indigo-700 bg-gray-100 rounded cursor-pointer hover:bg-gray-200">
                                                    <img class="w-[25px] h-[25px]" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                                            </div>
                                        </button>
                                    </a>

                                    {{-- Delete --}}
                                    <form method='post' action="{{ route('admin.posts.destroy', $post) }}" id='delete_form_{{ $post->id }}'>@csrf @method('DELETE')</form>


                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            {{-- {{ $post->links() }} --}}
        </div>
        <div class="container flex items-center justify-center pt-8 mx-auto sm:justify-end">
            <a class="mr-2 text-gray-600 border border-transparent rounded sm:mr-5 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="Previous Page" role="link" href="javascript: void(0)">
                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg7.svg" alt="Previous">
            </a>
            <p class="text-base text-gray-800  fot-normal">Page</p>
            <label for="selectedPage" class="hidden"></label>
            <input placeholder="0" id="selectedPage" type="text" class="flex items-center w-8 px-2 mx-2 text-base font-normal text-gray-800 bg-white border border-gray-300 rounded dark:bg-gray-800  focus:outline-none focus:shadow-outline-gray focus:border focus:border-indigo-700" value="4" />
            <p class="text-base text-gray-800  fot-normal">of 20</p>
            <a class="mx-2 text-gray-600 border border-transparent rounded sm:mx-5 focus:outline-none focus:border-gray-800 focus:shadow-outline-gray" aria-label="Next Page" role="link" href="javascript: void(0)">
                <img class="transform rotate-180" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg7.svg" alt="Previous">
            </a>
            <label for="totalPage" class="hidden"></label>
            <input placeholder="0" id="totalPage" type="text" class="flex items-center w-10 px-2 mr-2 text-base font-normal text-gray-800 bg-white border border-gray-300 rounded dark:bg-gray-800  focus:outline-none focus:shadow-outline-gray focus:border focus:border-indigo-700" value="30" />
            <p class="-mt-1 text-base text-gray-800  fot-normal">per page</p>
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

</script>
@endsection
