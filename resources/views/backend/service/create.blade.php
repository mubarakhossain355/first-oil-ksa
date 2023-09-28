@extends('backend.layouts.app')

@section('title','Create Service')

@push('css')

@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Create Service</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Create Service</li>
              </ol>
            </div>
          </div>
        </div>
      </section>
    <section class="content p-10">
        <div class="container-fluid">
            <form  action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
                <div class="row">
                    <div class="col-md-7">
                        <div class="card card-primary">
                            <div class="card-body">
                                <div class="form-group">
                                <label for="exampleInputFullName">Service Title</label>
                                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}" id="exampleInputFullName" placeholder="Enter service title">
                                    @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="exampleInputFullName">Short Description</label>
                                    <textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description" placeholder="Enter service short description">{{ old('short_description') }}</textarea>
                                    @error('short_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                <label for="exampleInputFullName">Service Category</label>
                                    <select name="service_category_id" class="form-control @error('service_category_id') is-invalid @enderror">
                                        <option value="">Select service category</option>
                                        @foreach ($serviceCategories as $serviceCategory)
                                            <option value="{{ $serviceCategory->id }}">{{ $serviceCategory->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('service_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                               
                                
                                <div class="form-group">
                                    <label for="exampleInputMobile">Service Details</label>
                                    <textarea name="details">{{ old('details') }}</textarea>
                                    @error('details')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status">Status : </label>
                                    <input name="status" type="radio"  id="radio_1" value="Draft" class="@error('status') is-invalid @enderror">
                                    <span for="radio">Draft</span>
                                    <input name="status" type="radio" checked id="radio_2" value="Published" class="@error('status') is-invalid @enderror">
                                    <span for="radio_2">Published</span>
                                      @error('status')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                      @enderror
                                </div>
                                <div class="form-group">
                                    <label>Featured Image</label><br>
                                    <input class="@error('featured_image') is-invalid @enderror" type="file" name="featured_image">
                                    @error('featured_image')
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $message }}</strong>
                                      </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </form>
        </div>
      </section>
@endsection

@push('script')
<script src="{{ asset('assets/backend/ckeditor/ckeditor.js') }}"></script>
{{-- <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script> --}}
<script>
  CKEDITOR.replace('details', {
        filebrowserUploadUrl: "{{route('admin.service.file.Upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endpush