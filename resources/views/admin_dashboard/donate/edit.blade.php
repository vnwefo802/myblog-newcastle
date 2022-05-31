

@extends("admin_dashboard.layouts.app")

@section("style")
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.10.0/tinymce.min.js" integrity="sha512-XNYSOn0laKYg55QGFv1r3sIlQWCAyNKjCa+XXF5uliZH+8ohn327Ewr2bpEnssV9Zw3pB3pmVvPQNrnCTRZtCg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@endsection


    @section("wrapper")
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">About</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Donate Page</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Donate Page</h5>
                    <hr/>

                    <form action="{{ route('admin.donate.update') }}" method='post' >
                        @csrf

                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">

                                        <div class="mb-3">
                                            <label for="donate_title" class="form-label">Top Title</label>
                                            <textarea name='about_first_text' class="form-control" id="donate_title">{{ $alldonate->donate_title }}</textarea>

                                            @error('donate_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="donate_first_short_title" class="form-label">second Title</label>
                                            <textarea name='donate_first_short_title' class="form-control" id="about_second_text">{{ $alldonate->donate_first_short_title }}</textarea>

                                            @error('donate_first_short_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- third title --}}
                                        <div class="mb-3">
                                            <label for="donate_second_short_title" class="form-label">third Title</label>
                                            <textarea name='donate_first_short_title' class="form-control" id="donate_second_short_title">{{ $alldonate->donate_second_short_title }}</textarea>

                                            @error('donate_first_short_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>




                                        {{-- Our Mission projects --}}
                                        <div class="mb-3">
                                            <label for="donate_project_title" class="form-label">Our Mission projects</label>
                                            <textarea name='donate_project_title' class="form-control" id="donate_project_title">{{ $alldonate->donate_project_title }}</textarea>

                                            @error('donate_project_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{-- Our Mission projects end --}}


                                        {{-- Our Objectives --}}
                                        <div class="mb-3">
                                            <label for="donate_objectives__title" class="form-label">Our Objectives</label>
                                            <textarea name='donate_objectives__title'  id='donate_objectives__title' class="form-control" rows="3">{{ old("donate_objectives__title", $alldonate->donate_objectives__title) }}</textarea>

                                            @error('donate_objectives__title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{-- Our Objectives end --}}


                                            {{-- Our Values --}}
                                        <div class="mb-3">
                                            <label for="donate_values_title" class="form-label">Our Values</label>
                                            <textarea name='donate_values_title'  id='donate_values_title' class="form-control" rows="3">{{ old("donate_values_title", $alldonate->donate_values_title) }}</textarea>

                                            @error('donate_values_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{-- Our Values end --}}


                                        <button class='btn btn-primary' type='submit'>Update</button>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>

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

        let initTinyMCE = (id) => {
            tinymce.init({
                selector: '#'+id,
                plugins: 'advlist autolink lists link charmap print preview hr anchor pagebreak',
                toolbar_mode: 'floating',
                height: '300',

                toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code | rtl ltr',
                toolbar_mode: 'floating',
            });
        }

        initTinyMCE('donate_project_title');
        initTinyMCE('donate_objectives__title');
        initTinyMCE('donate_values_title');

    });

</script>
@endsection
