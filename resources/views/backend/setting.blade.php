@extends('backend.layouts.app')

@section('title', 'Setting')

    @push('css')

    @endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Setting</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Setting</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content p-10">
        <div class="container-fluid">
            <form action="{{ route('admin.setting.update', $setting->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputMobile">Company Address</label>
                                    <textarea type="text" name="company_address"
                                        class="form-control @error('company_address') is-invalid @enderror" value=""
                                        id="exampleInputMobile"
                                        placeholder="Enter company address">{{ old('company_address', $setting->company_address) }}</textarea>
                                    @error('company_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Contact Number 1</label>
                                    <input type="text" name="mobile"
                                        class="form-control @error('mobile') is-invalid @enderror"
                                        value="{{ old('mobile', $setting->mobile) }}" id="exampleInputFullmobile"
                                        placeholder="Enter mobile">
                                    @error('mobile')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Contact Number 2</label>
                                    <input type="text" name="mobile_1"
                                        class="form-control @error('mobile_1') is-invalid @enderror"
                                        value="{{ old('mobile_1', $setting->mobile_1) }}" id="exampleInputFullmobile"
                                        placeholder="Enter mobile 2">
                                    @error('mobile_1')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Email</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email', $setting->email) }}" id="exampleInputFullemail"
                                        placeholder="Enter email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMobile">Others sister concern</label>
                                    <textarea type="text" name="sister_concern"
                                        class="form-control @error('sister_concern') is-invalid @enderror" value=""
                                        id="exampleInputMobile"
                                        placeholder="Enter others sister concern">{{ old('sister_concern', $setting->sister_concern) }}</textarea>
                                    @error('sister_concern')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Office Location (Google map)</label>
                                    <input type="text" name="office_location_map"
                                        class="form-control @error('office_location_map') is-invalid @enderror"
                                        value="{{ old('office_location_map', $setting->office_location_map) }}"
                                        id="exampleInputFulloffice_location_map" placeholder="Enter office location map">
                                    @error('office_location_map')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Facebook URL</label>
                                    <input type="text" name="facebook_url"
                                        class="form-control @error('facebook_url') is-invalid @enderror"
                                        value="{{ old('facebook_url', $setting->facebook_url) }}"
                                        id="exampleInputFullfacebook_url" placeholder="Enter facebook url">
                                    @error('facebook_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Twitter URL</label>
                                    <input type="text" name="twitter_url"
                                        class="form-control @error('twitter_url') is-invalid @enderror"
                                        value="{{ old('twitter_url', $setting->twitter_url) }}"
                                        id="exampleInputFulltwitter_url" placeholder="Enter twitter url">
                                    @error('twitter_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Linkedin URL</label>
                                    <input type="text" name="linkedin_url"
                                        class="form-control @error('linkedin_url') is-invalid @enderror"
                                        value="{{ old('linkedin_url', $setting->linkedin_url) }}"
                                        id="exampleInputFulllinkedin_url" placeholder="Enter linkedin url">
                                    @error('linkedin_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Youtube URL</label>
                                    <input type="text" name="youtube_url"
                                        class="form-control @error('youtube_url') is-invalid @enderror"
                                        value="{{ old('youtube_url', $setting->youtube_url) }}"
                                        id="exampleInputFulllinkedin_url" placeholder="Enter youtube url">
                                    @error('youtube_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Instagram URL</label>
                                    <input type="text" name="instagram_url"
                                        class="form-control @error('instagram_url') is-invalid @enderror"
                                        value="{{ old('instagram_url', $setting->instagram_url) }}"
                                        id="exampleInputFulllinkedin_url" placeholder="Enter instagram url">
                                    @error('instagram_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div style="position: relative" class="form-group">
                                    <label for="exampleInputFile">Logo</label><br>
                                    <input type="file" name="logo" class="@error('logo') is-invalid @enderror">
                                    @error('logo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="card-body text-center">
                                        <img width="100"
                                            style="max-width: 100%; border-radius: 50%; position: absolute; top: 15px;"
                                            src="{{ asset('storage/' . $setting->logo) }}" alt="logo">
                                    </div>
                                </div>
                                <div style="position: relative" class="form-group">
                                    <label for="exampleInputFile">Breadcrumb Background Image</label><br>
                                    <input type="file" name="breadcrub_image"
                                        class="@error('breadcrub_image') is-invalid @enderror">
                                    @error('breadcrub_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="card-body text-center">
                                        <img width="100" style="max-width: 100%; position: absolute; top: 15px;"
                                            src="{{ asset('storage/' . $setting->breadcrub_image) }}"
                                            alt="breadcrub image">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Page Settings</h3>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputFullName">Why Choose Us Section Title</label>
                                    <input type="text" name="why_choose_us_title"
                                        class="form-control @error('why_choose_us_title') is-invalid @enderror"
                                        value="{{ old('why_choose_us_title', $setting->why_choose_us_title) }}"
                                        id="exampleInputFullwhy_choose_us_title" placeholder="Enter why choose us title">
                                    @error('why_choose_us_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div style="position: relative" class="form-group">
                                    <label for="exampleInputFile">Why Choose US Image</label><br>
                                    <input type="file" name="why_choose_us_image"
                                        class="@error('why_choose_us_image') is-invalid @enderror">
                                    @error('why_choose_us_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <div class="card-body text-center">
                                        <img width="100" style="max-width: 100%; position: absolute; top: 15px;"
                                            src="{{ asset('storage/' . $setting->why_choose_us_image) }}"
                                            alt="why choose us image">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Project Section Title</label>
                                    <input type="text" name="project_title"
                                        class="form-control @error('project_title') is-invalid @enderror"
                                        value="{{ old('project_title', $setting->project_title) }}"
                                        id="exampleInputFullproject_title" placeholder="Enter project title">
                                    @error('project_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputMobile">Project Section Sub Title</label>
                                    <textarea type="text" name="project_sub_title"
                                        class="form-control @error('project_sub_title') is-invalid @enderror" value=""
                                        placeholder="Enter project sub title">{{ old('project_sub_title', $setting->project_sub_title) }}</textarea>
                                    @error('project_sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFullName">Service Section Title</label>
                                    <input type="text" name="service_title"
                                        class="form-control @error('service_title') is-invalid @enderror"
                                        value="{{ old('service_title', $setting->service_title) }}"
                                        id="exampleInputFullmedia_title" placeholder="Enter service title">
                                    @error('service_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Service Section Sub Title</label>
                                    <textarea type="text" name="service_sub_title"
                                        class="form-control @error('service_sub_title') is-invalid @enderror" value=""
                                        placeholder="Enter service sub title">{{ old('service_sub_title', $setting->service_sub_title) }}</textarea>
                                    @error('service_sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFullName">Testimonial Section Title</label>
                                    <input type="text" name="testimonial_title"
                                        class="form-control @error('testimonial_title') is-invalid @enderror"
                                        value="{{ old('testimonial_title', $setting->testimonial_title) }}"
                                        id="exampleInputFullmedia_title" placeholder="Enter testimonial title">
                                    @error('testimonial_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Testimonial Section Sub Title</label>
                                    <textarea type="text" name="testimonial_sub_title"
                                        class="form-control @error('testimonial_sub_title') is-invalid @enderror" value=""
                                        placeholder="Enter testimonial sub title">{{ old('testimonial_sub_title', $setting->testimonial_sub_title) }}</textarea>
                                    @error('testimonial_sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFullName">Our Team Section Title</label>
                                    <input type="text" name="team_title"
                                        class="form-control @error('team_title') is-invalid @enderror"
                                        value="{{ old('team_title', $setting->team_title) }}"
                                        id="exampleInputFullmedia_title" placeholder="Enter team title">
                                    @error('team_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Our Team Section Sub Title</label>
                                    <textarea type="text" name="team_sub_title"
                                        class="form-control @error('team_sub_title') is-invalid @enderror" value=""
                                        placeholder="Enter team sub title">{{ old('team_sub_title', $setting->team_sub_title) }}</textarea>
                                    @error('team_sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFullName">Contact US Section Title</label>
                                    <input type="text" name="contact_us_title"
                                        class="form-control @error('contact_us_title') is-invalid @enderror"
                                        value="{{ old('contact_us_title', $setting->contact_us_title) }}"
                                        id="exampleInputFullmedia_title" placeholder="Enter contact us title">
                                    @error('contact_us_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label>Contact US Section Sub Title</label>
                                    <textarea type="text" name="contact_us_sub_title"
                                        class="form-control @error('contact_us_sub_title') is-invalid @enderror" value=""
                                        placeholder="Enter contact us sub title">{{ old('contact_us_sub_title', $setting->contact_us_sub_title) }}</textarea>
                                    @error('contact_us_sub_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputFullName">Call To Action 1 Title</label>
                                    <input type="text" name="call_to_action_one_title"
                                        class="form-control @error('call_to_action_one_title') is-invalid @enderror"
                                        value="{{ old('call_to_action_one_title', $setting->call_to_action_one_title) }}"
                                        id="exampleInputFullcall_to_action_one_title"
                                        placeholder="Enter call to action one title">
                                    @error('call_to_action_one_title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        <label for="exampleInputFullName">Call To Action 1 Button Title</label>
                                        <input type="text" name="call_to_action_one_button_title"
                                            class="form-control @error('call_to_action_one_button_title') is-invalid @enderror"
                                            value="{{ old('call_to_action_one_button_title', $setting->call_to_action_one_button_title) }}"
                                            id="exampleInputFullcall_to_action_one_button_title"
                                            placeholder="Enter call to action one button title">
                                        @error('call_to_action_one_button_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div>
                                        <label for="exampleInputFullName">Call To Action 1 Button URL</label>
                                        <input type="text" name="call_to_action_one_button_url"
                                            class="form-control @error('call_to_action_one_button_url') is-invalid @enderror"
                                            value="{{ old('call_to_action_one_button_url', $setting->call_to_action_one_button_url) }}"
                                            id="exampleInputFullcall_to_action_one_button_url"
                                            placeholder="Enter call to action one button url">
                                        @error('call_to_action_one_button_url')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col">
                                        <label>About Us Title For Footer Section</label>
                                        <input type="text" name="footer_about_us_title"
                                            class="form-control @error('footer_about_us_title') is-invalid @enderror"
                                            value="{{ old('footer_about_us_title', $setting->footer_about_us_title) }}"
                                            id="exampleInputFullfooter_about_us_title"
                                            placeholder="Enter call to action one button title">
                                        @error('footer_about_us_title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>About Us Short Description For Footer Section</label>
                                    <textarea type="text" name="footer_about_us_description"
                                        class="form-control @error('footer_about_us_description') is-invalid @enderror"
                                        value="" id="exampleInputMobile"
                                        placeholder="Enter who we are">{{ old('footer_about_us_description', $setting->footer_about_us_description) }}</textarea>
                                    @error('footer_about_us_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection

@push('script')

@endpush
