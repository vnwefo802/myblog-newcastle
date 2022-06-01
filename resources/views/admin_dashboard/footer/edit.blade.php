
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
                <div class="breadcrumb-title pe-3">Footer</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i class="bx bx-footer-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Footer</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
          
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="card-title">Edit Footer</h5>
                    <hr/>

                    <form action="{{ route('admin.footer.update') }}" method='post' enctype='multipart/form-data'>
                        @csrf
    
                        <div class="form-body mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="border border-3 p-4 rounded">

                                    <!-- Title -->
                                    <div class="mb-3">
                                            <label for="title" class="form-label">Short Description</label>
                                            <textarea name='title'  id='title' class="form-control" rows="3">{{ old("title", $allfooter->title) }}</textarea>
                                        
                                            @error('title')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                    <!-- Facebook -->
                                    <div class="mb-3">
                                            <label for="facebook" class="form-label">Facebook Link</label>
                                            <textarea name='facebook'  id='facebook' class="form-control" rows="3">{{ old("facebook", $allfooter->facebook) }}</textarea>
                                        
                                            @error('facebook')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        
                                    <!-- Twitter -->
                                    <div class="mb-3">
                                            <label for="twitter" class="form-label">Twitter Link</label>
                                            <textarea name='twitter'  id='twitter' class="form-control" rows="3">{{ old("twitter", $allfooter->twitter) }}</textarea>
                                        
                                            @error('twitter')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                    <!-- Instagram -->
                                    <div class="mb-3">
                                            <label for="instagram" class="form-label">Instagram Link</label>
                                            <textarea name='instagram'  id='instagram' class="form-control" rows="3">{{ old("instagram", $allfooter->instagram) }}</textarea>
                                        
                                            @error('instagram')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                    <!-- YouTube -->
                                    <div class="mb-3">
                                            <label for="youtube" class="form-label">Youtube Link</label>
                                            <textarea name='youtube'  id='youtube' class="form-control" rows="3">{{ old("youtube", $allfooter->youtube) }}</textarea>
                                        
                                            @error('youtube')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                    <!-- facebook -->
                                    <div class="mb-3">
                                            <label for="facebook" class="form-label">Facebook Link</label>
                                            <textarea name='facebook'  id='facebook' class="form-control" rows="3">{{ old("facebook", $allfooter->facebook) }}</textarea>
                                        
                                            @error('facebook')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>

                                <div class='row'>
                                    <div class='col-md-6'>
                                    <!-- community 1 -->
                                    <div class="mb-3">
                                            <label for="community1" class="form-label">Community Link Text 1</label>
                                            <textarea name='community1'  id='community1' class="form-control" rows="3">{{ old("community1", $allfooter->community1) }}</textarea>
                                        
                                            @error('community1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>
                                    
                                    <div class='col-md-6'>
                                    <!-- community_link_1 -->
                                    <div class="mb-3">
                                            <label for="community_link_1" class="form-label">Community Link 1</label>
                                            <textarea name='community_link_1'  id='community_link_1' class="form-control" rows="3">{{ old("community_link_1", $allfooter->community_link_1) }}</textarea>
                                        
                                            @error('community_link_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- community2 -->
                                    <div class="mb-3">
                                            <label for="community2" class="form-label">Community Link Text 2</label>
                                            <textarea name='community2'  id='community2' class="form-control" rows="3">{{ old("community2", $allfooter->community2) }}</textarea>
                                        
                                            @error('community2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- community_link_2 -->
                                    <div class="mb-3">
                                            <label for="community_link_2" class="form-label">Community Link 2</label>
                                            <textarea name='community_link_2'  id='community_link_2' class="form-control" rows="3">{{ old("community_link_2", $allfooter->community_link_2) }}</textarea>
                                        
                                            @error('community_link_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- community3 -->
                                    <div class="mb-3">
                                            <label for="community3" class="form-label">Community Link Text 3</label>
                                            <textarea name='community3'  id='community3' class="form-control" rows="3">{{ old("community3", $allfooter->community3) }}</textarea>
                                        
                                            @error('community3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- community_link_2 -->
                                    <div class="mb-3">
                                            <label for="community_link_3" class="form-label">Community Link 3</label>
                                            <textarea name='community_link_3'  id='community_link_3' class="form-control" rows="3">{{ old("community_link_3", $allfooter->community_link_3) }}</textarea>
                                        
                                            @error('community_link_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- community4 -->
                                    <div class="mb-3">
                                            <label for="community4" class="form-label">Community Link Text 4</label>
                                            <textarea name='community4'  id='community4' class="form-control" rows="3">{{ old("community4", $allfooter->community4) }}</textarea>
                                        
                                            @error('community4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- community_link_4 -->
                                    <div class="mb-3">
                                            <label for="community_link_4" class="form-label">Community Link 4</label>
                                            <textarea name='community_link_4'  id='community_link_4' class="form-control" rows="3">{{ old("community_link_4", $allfooter->community_link_4) }}</textarea>
                                        
                                            @error('community_link_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog1 -->
                                    <div class="mb-3">
                                            <label for="blog1" class="form-label">Blog Link Text 1</label>
                                            <textarea name='blog1'  id='blog1' class="form-control" rows="3">{{ old("blog1", $allfooter->blog1) }}</textarea>
                                        
                                            @error('blog1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog_link_1 -->
                                    <div class="mb-3">
                                            <label for="blog_link_1" class="form-label">Blog Link 1</label>
                                            <textarea name='blog_link_1'  id='blog_link_1' class="form-control" rows="3">{{ old("blog_link_1", $allfooter->blog_link_1) }}</textarea>
                                        
                                            @error('blog_link_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog2 -->
                                    <div class="mb-3">
                                            <label for="blog2" class="form-label">Blog Link Text 2</label>
                                            <textarea name='blog2'  id='blog2' class="form-control" rows="3">{{ old("blog2", $allfooter->blog2) }}</textarea>
                                        
                                            @error('blog2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog_link_2 -->
                                    <div class="mb-3">
                                            <label for="blog_link_2" class="form-label">Blog Link 2</label>
                                            <textarea name='blog_link_2'  id='blog_link_2' class="form-control" rows="3">{{ old("blog_link_2", $allfooter->blog_link_2) }}</textarea>
                                        
                                            @error('blog_link_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>
                                       

                                    
                                    <div class='col-md-6'>
                                    <!-- blog3 -->
                                    <div class="mb-3">
                                            <label for="blog3" class="form-label">Blog Link Text 3</label>
                                            <textarea name='blog3'  id='blog3' class="form-control" rows="3">{{ old("blog3", $allfooter->blog3) }}</textarea>
                                        
                                            @error('blog3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog_link_3 -->
                                    <div class="mb-3">
                                            <label for="blog_link_3" class="form-label">Blog Link 3</label>
                                            <textarea name='blog_link_3'  id='blog_link_3' class="form-control" rows="3">{{ old("blog_link_3", $allfooter->blog_link_3) }}</textarea>
                                        
                                            @error('blog_link_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>
                                        
                                        
                                    <div class='col-md-6'>
                                    <!-- blog4 -->
                                    <div class="mb-3">
                                            <label for="blog4" class="form-label">Blog Link Text 4</label>
                                            <textarea name='blog4'  id='blog4' class="form-control" rows="3">{{ old("blog4", $allfooter->blog4) }}</textarea>
                                        
                                            @error('blog4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog_link_4 -->
                                    <div class="mb-3">
                                            <label for="blog_link_4" class="form-label">Blog Link 4</label>
                                            <textarea name='blog_link_4'  id='blog_link_4' class="form-control" rows="3">{{ old("blog_link_4", $allfooter->blog_link_4) }}</textarea>
                                        
                                            @error('blog_link_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog5 -->
                                    <div class="mb-3">
                                            <label for="blog5" class="form-label">Blog Link Text 5</label>
                                            <textarea name='blog5'  id='blog5' class="form-control" rows="3">{{ old("blog5", $allfooter->blog5) }}</textarea>
                                        
                                            @error('blog5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- blog_link_5 -->
                                    <div class="mb-3">
                                            <label for="blog_link_5" class="form-label">Blog Link 1</label>
                                            <textarea name='blog_link_5'  id='blog_link_5' class="form-control" rows="3">{{ old("blog_link_5", $allfooter->blog_link_5) }}</textarea>
                                        
                                            @error('blog_link_5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- contact1 -->
                                    <div class="mb-3">
                                            <label for="contact1" class="form-label">Contact Link Text 1</label>
                                            <textarea name='contact1'  id='contact1' class="form-control" rows="3">{{ old("contact1", $allfooter->contact1) }}</textarea>
                                        
                                            @error('contact1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- contact_link_1 -->
                                    <div class="mb-3">
                                            <label for="contact_link_1" class="form-label">Contact Link 1</label>
                                            <textarea name='contact_link_1'  id='contact_link_1' class="form-control" rows="3">{{ old("contact_link_1", $allfooter->contact_link_1) }}</textarea>
                                        
                                            @error('contact_link_1')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- contact2 -->
                                    <div class="mb-3">
                                            <label for="contact2" class="form-label">Contact Link Text 2</label>
                                            <textarea name='contact2'  id='contact2' class="form-control" rows="3">{{ old("contact2", $allfooter->contact2) }}</textarea>
                                        
                                            @error('contact2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- contact_link_2 -->
                                    <div class="mb-3">
                                            <label for="contact_link_2" class="form-label">Contact Link 2</label>
                                            <textarea name='contact_link_2'  id='contact_link_2' class="form-control" rows="3">{{ old("contact_link_2", $allfooter->contact_link_2) }}</textarea>
                                        
                                            @error('contact_link_2')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>
                                    <div class='col-md-6'>
                                    <!-- contact3 -->
                                    <div class="mb-3">
                                            <label for="contact3" class="form-label">Contact Link Text 3</label>
                                            <textarea name='contact3'  id='contact3' class="form-control" rows="3">{{ old("contact3", $allfooter->contact3) }}</textarea>
                                        
                                            @error('contact3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    <div class='col-md-6'>
                                    <!-- contact_link_3 -->
                                    <div class="mb-3">
                                            <label for="contact_link_3" class="form-label">Contact Link 3</label>
                                            <textarea name='contact_link_3'  id='contact_link_3' class="form-control" rows="3">{{ old("contact_link_3", $allfooter->contact_link_3) }}</textarea>
                                        
                                            @error('contact_link_3')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>

                                    
                                    <div class='col-md-6'>
                                    <!-- contact4 -->
                                    <div class="mb-3">
                                            <label for="contact4" class="form-label">Contact Link Text 4</label>
                                            <textarea name='contact4'  id='contact4' class="form-control" rows="3">{{ old("contact4", $allfooter->contact4) }}</textarea>
                                        
                                            @error('contact4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>
                                    
                                    <div class='col-md-6'>
                                    <!-- contact_link_4 -->
                                    <div class="mb-3">
                                            <label for="contact_link_4" class="form-label">Contact Link 4</label>
                                            <textarea name='contact_link_4'  id='contact_link_4' class="form-control" rows="3">{{ old("contact_link_4", $allfooter->contact_link_4) }}</textarea>
                                        
                                            @error('contact_link_4')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                        </div>
                                        
                                    
                                    
                                    <div class='col-md-6'>
                                    <!-- contact5 -->
                                    <div class="mb-3">
                                            <label for="contact5" class="form-label">Contact Link Text 5</label>
                                            <textarea name='contact5'  id='contact5' class="form-control" rows="3">{{ old("contact5", $allfooter->contact5) }}</textarea>
                                        
                                            @error('contact5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class='col-md-6'>
                                    <!-- contact_link_5 -->
                                    <div class="mb-3">
                                            <label for="contact_link_5" class="form-label">Contact Link 1</label>
                                            <textarea name='contact_link_5'  id='contact_link_5' class="form-control" rows="3">{{ old("contact_link_5", $allfooter->contact_link_5) }}</textarea>
                                        
                                            @error('contact_link_5')
                                                <p class='text-danger'>{{ $message }}</p>
                                            @enderror
                                        </div>
                                </div>
                                    
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

        initTinyMCE('title');
        initTinyMCE('box_short_description_1');
        initTinyMCE('box_short_description_2');
        initTinyMCE('box_short_description_3');
        initTinyMCE('box_short_description_4');
        initTinyMCE('project_short_title');
        initTinyMCE('difference_title');

    });

</script>
@endsection