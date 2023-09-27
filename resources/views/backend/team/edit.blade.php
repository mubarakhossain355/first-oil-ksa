@extends('backend.layouts.app')

@section('title','Edit Our Team')

@push('css')

@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Our Team</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Our Team</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
    <section class="content p-10">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <form  action="{{ route('admin.team.update',$team->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputFullName">Full name</label>
                      <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $team->name) }}" id="exampleInputFullName" placeholder="Enter full name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFullName">Designation</label>
                      <input type="text" name="designation" class="form-control @error('designation') is-invalid @enderror" value="{{ old('designation', $team->designation) }}" id="exampleInputFullName" placeholder="Enter designation">
                        @error('designation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFullName">Company</label>
                      <input type="text" name="company" class="form-control @error('company') is-invalid @enderror" value="{{ old('company',$team->company) }}" id="exampleInputFullName" placeholder="Enter company">
                        @error('company')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                      <label for="exampleInputMobile">Facebook URL</label>
                      <input type="text" name="facebook_url" class="form-control @error('facebook_url') is-invalid @enderror" value="{{ old('facebook_url',$team->facebook_url) }}" id="exampleInputFullName" placeholder="Enter facebook url">
                        @error('facebook_url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleInputMobile">Email Address</label>
                        <input type="text" name="email_url" class="form-control @error('email_url') is-invalid @enderror" value="{{ old('email_url',$team->email_url) }}" id="exampleInputFullName" placeholder="Enter email">
                          @error('email_url')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMobile">Twitter URL</label>
                        <input type="text" name="twitter_url" class="form-control @error('twitter_url') is-invalid @enderror" value="{{ old('twitter_url',$team->twitter_url) }}" id="exampleInputFullName" placeholder="Enter Twitter url">
                          @error('twitter_url')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleInputMobile">Linkedin URL</label>
                        <input type="text" name="linkedin_url" class="form-control @error('linkedin_url') is-invalid @enderror" value="{{ old('linkedin_url',$team->linkedin_url) }}" id="exampleInputFullName" placeholder="Enter Linkedin url">
                          @error('linkedin_url')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="status">Status : </label>
                        <input name="status" {{ $team->status == 'Active' ? 'checked' : '' }} type="radio" checked  id="radio_1" value="Active" class="@error('status') is-invalid @enderror">
                        <span for="radio">Active</span>
                        <input name="status" {{ $team->status == 'Inactive' ? 'checked' : '' }} type="radio" id="radio_2" value="Inactive" class="@error('status') is-invalid @enderror">
                        <span for="radio_2">Inactive</span>
                          @error('status')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                          @enderror
                      </div>
                    <div class="form-group">
                        <label for="exampleInputFile">Upload photo</label><br>
                        <input type="file" name="photo" class="@error('photo') is-invalid @enderror">
                        @error('photo')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                        @enderror
                    </div>
                </div>
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection

@push('script')

@endpush