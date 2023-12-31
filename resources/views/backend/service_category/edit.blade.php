@extends('backend.layouts.app')

@section('title','Edit Service Category')

@push('css')

@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Edit Service Category</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Edit Service Category</li>
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
                <form  action="{{ route('admin.serviceCategory.update',$serviceCategory->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputFullName">Name</label>
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ $serviceCategory->name }}" id="exampleInputFullName" placeholder="Enter service serviceCategory name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="status">Status : </label>
                        <input name="status" {{ $serviceCategory->status == 'Active' ? 'checked' : '' }} type="radio" checked  id="radio_1" value="Active" class="@error('status') is-invalid @enderror">
                        <span for="radio">Active</span>
                        <input name="status" {{ $serviceCategory->status == 'Inactive' ? 'checked' : '' }} type="radio" id="radio_2" value="Inactive" class="@error('status') is-invalid @enderror">
                        <span for="radio_2">Inactive</span>
                          @error('status')
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