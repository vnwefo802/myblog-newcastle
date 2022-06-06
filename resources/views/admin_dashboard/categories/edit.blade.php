
@extends("admin_dashboard.layouts.app")


@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Categories</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title">Edit Category: {{ $category->name }}</h5>
                <hr/>

                <form action="{{ route('admin.categories.update', $category) }}" method='post'>
                    @csrf
                    @method('PATCH')

                    <div class="form-body mt-4">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="border border-3 p-4 rounded">
                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Category Name</label>
                                        <input type="text" value='{{ old("name", $category->name) }}' name='name' required class="form-control" id="inputProductTitle">

                                        @error('title')
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="inputProductTitle" class="form-label">Category Slug</label>
                                        <input type="text" value='{{ old("slug", $category->slug) }}' class="form-control" required name='slug' id="inputProductTitle">

                                        @error('slug')
                                            <p class='text-danger'>{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <button class='btn btn-primary' type='submit'>Update Category</button>

                                    <a
                                    class='btn btn-danger'
                                    onclick="event.preventDefault();document.getElementById('delete_category_{{ $category->id }}').submit()"
                                    href="#">Delete Category</a>

                                </div>
                            </div>

                        </div>
                    </div>
                </form>

                <form id='delete_category_{{ $category->id }}' method='post' action="{{ route('admin.categories.destroy', $category) }}" class="confirmDelete">
                    @csrf
                    @method('DELETE')

                    <button type="submit"class="px-6 py-3 mb-1 mr-1 text-sm font-bold text-white uppercase transition-all duration-150 ease-linear rounded shadow outline-none active:bg-red-200 hover:shadow-lg focus:outline-none" href="javascript: void(0)">
                        <div aria-label="Delete" role="button" class="w-[26px] h-[26px] mt-1 text-indigo-700  rounded cursor-pointer hover:bg-red-500-200">
                                <img class="w-[25px] h-[25px]" src="https://tuk-cdn.s3.amazonaws.com/can-uploader/advance_table_with_filters_search_and_two_level_action_buttons-svg6.svg" alt="Delete">
                        </div>
                    </button>
                </form>

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
