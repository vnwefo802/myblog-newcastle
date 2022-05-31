

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


                                        <div class="mb-3">
                                            <label for="donate_second_short_title" class="form-label">third Title</label>
                                            <textarea name='donate_first_short_title' class="form-control" id="donate_second_short_title">{{ $alldonate->donate_second_short_title }}</textarea>

                                            @error('donate_first_short_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        {{-- Project Title --}}
                                        <div class="mb-3">
                                            <label for="donate_project_title" class="form-label">Project Title</label>
                                            <textarea name='donate_project_title' class="form-control" id="donate_project_title">{{ $alldonate->donate_project_title }}</textarea>

                                            @error('donate_project_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{-- Project Title end --}}


                                         {{-- First Project Title --}}
                                         <div class="mb-3">
                                            <label for="donate_first_project__short_title" class="form-label">Project Title</label>
                                            <textarea name='donate_first_project__short_title' class="form-control" id="donate_first_project__short_title">{{ $alldonate->donate_first_project__short_title }}</textarea>

                                            @error('donate_first_project__short_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{--First Project Title end --}}


                                         {{-- second Project Title --}}
                                         <div class="mb-3">
                                            <label for="donate_second_project__short_title" class="form-label">Project Title</label>
                                            <textarea name='donate_second_project__short_title' class="form-control" id="donate_first_project__short_title">{{ $alldonate->donate_second_project__short_title }}</textarea>

                                            @error('donate_second_project__short_title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{--second Project Title end --}}


                                        {{-- first  Project long description --}}
                                        <div class="mb-3">
                                            <label for="donate_first_project__long_description" class="form-label">first  Project long description</label>
                                            <textarea name='donate_first_project__long_description' class="form-control" id="donate_first_project__long_description">{{ $alldonate->donate_first_project__long_description }}</textarea>

                                            @error('donate_first_project__long_description')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{--first  Project long description end --}}


                                        {{-- second  Project long description --}}
                                        <div class="mb-3">
                                            <label for="donate_second_project__long_description" class="form-label">second  Project long description</label>
                                            <textarea name='donate_second_project__long_description' class="form-control" id="donate_first_project__long_description">{{ $alldonate->donate_second_project__long_description }}</textarea>

                                            @error('donate_second_project__long_description')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        {{--second  Project long description end --}}

                                             {{-- donate_objectives__title --}}
                                             <div class="mb-3">
                                                <label for="donate_objectives__title" class="form-label">title</label>
                                                <textarea name='donate_objectives__title' class="form-control" id="donate_objectives__title">{{ $alldonate->donate_objectives__title }}</textarea>

                                                @error('donate_objectives__title')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--second  Project long description end --}}


                                            {{-- donate_first__Objectives__description--}}
                                            <div class="mb-3">
                                                <label for="donate_first__Objectives__description" class="form-label">title</label>
                                                <textarea name='donate_first__Objectives__description' class="form-control" id="donate_objectives__title">{{ $alldonate->donate_first__Objectives__description }}</textarea>

                                                @error('donate_first__Objectives__description')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_first__Objectives__description end --}}


                                            {{-- donate_second__Objectives__description--}}
                                            <div class="mb-3">
                                                <label for="donate_second__Objectives__description" class="form-label">title</label>
                                                <textarea name='donate_second__Objectives__description' class="form-control" id="donate_objectives__title">{{ $alldonate->donate_second__Objectives__description }}</textarea>

                                                @error('donate_second__Objectives__description')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_second__Objectives__description end --}}

                                            {{-- donate_third__Objectives__description--}}
                                            <div class="mb-3">
                                                <label for="donate_third__Objectives__description" class="form-label">title</label>
                                                <textarea name='donate_third__Objectives__description' class="form-control" id="donate_objectives__title">{{ $alldonate->donate_third__Objectives__description }}</textarea>

                                                @error('donate_third__Objectives__description')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_third__Objectives__description end --}}


                                            {{-- donate_third__Objectives__description--}}
                                            <div class="mb-3">
                                                <label for="donate_fourth__Objectives__description" class="form-label">title</label>
                                                <textarea name='donate_fourth__Objectives__description' class="form-control" id="donate_fourth__Objectives__description">{{ $alldonate->donate_fourth__Objectives__description }}</textarea>

                                                @error('donate_fourth__Objectives__description')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_fourth__Objectives__description end --}}

                                            {{-- donate_fifth__Objectives__description--}}
                                            <div class="mb-3">
                                                <label for="donate_fifth__Objectives__description" class="form-label">title</label>
                                                <textarea name='donate_fifth__Objectives__description' class="form-control" id="donate_fifth__Objectives__description">{{ $alldonate->donate_fifth__Objectives__description }}</textarea>

                                                @error('donate_fifth__Objectives__description')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_fifth__Objectives__description end --}}

                                            {{-- donate_sixth__Objectives__description--}}
                                            <div class="mb-3">
                                                <label for="donate_sixth__Objectives__description" class="form-label">title</label>
                                                <textarea name='donate_sixth__Objectives__description' class="form-control" id="donate_sixth__Objectives__description">{{ $alldonate->donate_sixth__Objectives__description }}</textarea>

                                                @error('donate_sixth__Objectives__description')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_sixth__Objectives__description end --}}


                                               {{-- donate_values_title--}}
                                               <div class="mb-3">
                                                <label for="donate_values_title" class="form-label">title</label>
                                                <textarea name='donate_values_title' class="form-control" id="donate_values_title">{{ $alldonate->donate_values_title }}</textarea>

                                                @error('donate_values_title')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_values_title end --}}


                                            {{-- donate_first__Values__description--}}
                                            <div class="mb-3">
                                                <label for="donate_first__Values__description" class="form-label">title</label>
                                                <textarea name='donate_first__Values__description' class="form-control" id="donate_first__Values__description">{{ $alldonate->donate_first__Values__description }}</textarea>

                                                @error('donate_first__Values__description')
                                                    <p class='text-danger'>{{ $message }}</p>
                                                @enderror
                                            </div>
                                            {{--donate_first__Values__description end --}}

                                                {{-- donate_second__Values__description--}}
                                                <div class="mb-3">
                                                    <label for="donate_second__Values__description" class="form-label">title</label>
                                                    <textarea name='donate_second__Values__description' class="form-control" id="donate_second__Values__description">{{ $alldonate->donate_second__Values__description }}</textarea>

                                                    @error('donate_second__Values__description')
                                                        <p class='text-danger'>{{ $message }}</p>
                                                    @enderror
                                                </div>
                                                {{--donate_second__Values__description end --}}


                                                      {{-- donate_third__Values__description--}}
                                                      <div class="mb-3">
                                                        <label for="donate_third__Values__description" class="form-label">title</label>
                                                        <textarea name='donate_third__Values__description' class="form-control" id="donate_third__Values__description">{{ $alldonate->donate_third__Values__description }}</textarea>

                                                        @error('donate_third__Values__description')
                                                            <p class='text-danger'>{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    {{--donate_third__Values__description end --}}


                                                        {{-- donate_fourth__Values__description--}}
                                                        <div class="mb-3">
                                                            <label for="donate_fourth__Values__description" class="form-label">title</label>
                                                            <textarea name='donate_fourth__Values__description' class="form-control" id="donate_fourth__Values__description">{{ $alldonate->donate_fourth__Values__description }}</textarea>

                                                            @error('donate_fourth__Values__description')
                                                                <p class='text-danger'>{{ $message }}</p>
                                                            @enderror
                                                        </div>
                                                        {{--donate_fourth__Values__description end --}}

                                                            {{-- donate_fifth__Values__description--}}
                                                            <div class="mb-3">
                                                                <label for="donate_fifth__Values__description" class="form-label">title</label>
                                                                <textarea name='donate_fifth__Values__description' class="form-control" id="donate_fifth__Values__description">{{ $alldonate->donate_fifth__Values__description }}</textarea>

                                                                @error('donate_fifth__Values__description')
                                                                    <p class='text-danger'>{{ $message }}</p>
                                                                @enderror
                                                            </div>
                                                            {{--donate_fifth__Values__description end --}}




                                        <div class="mb-3">
                                            <label for="about_our_mission" class="form-label">About Our Mission</label>
                                            <textarea name='about_our_mission'  id='about_our_mission' class="form-control" id="our_mission" rows="3">{{ old("about_our_mission", $alldonate->about_our_mission) }}</textarea>

                                            @error('about_our_mission')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="about_our_vision" class="form-label">About Our Vision</label>
                                            <textarea name='about_our_vision'  id='about_our_vision' class="form-control" rows="3">{{ old("about_our_vision", $alldonate->about_our_vision) }}</textarea>

                                            @error('about_our_vision')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <div class="mb-3">
                                            <label for="about_services" class="form-label">About Services</label>
                                            <textarea name='about_services'  id='about_services' class="form-control" rows="3">{{ old("about_services", $alldonate->about_services) }}</textarea>

                                            @error('about_services')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>


                                        <button class='btn btn-primary text-blue-500 hover:text-white' type='submit'>Update</button>

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

        initTinyMCE('about_our_mission');
        initTinyMCE('about_our_vision');
        initTinyMCE('about_services');

    });

</script>
@endsection
