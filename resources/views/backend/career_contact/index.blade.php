@extends('backend.layouts.app')

@section('title','Career Contact List')

@push('style')

@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Career Contact List</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="breadcrumb-item active">Career Contact List</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <!-- Main content -->
    <section class="content p-10">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <div class="card-tools" style="float: left">
                        <form action="{{ route('admin.career.contact.index') }}" method="GET">
                            @csrf
                            <div class="input-group input-group-sm" style="width: 250px;">
                            
                                <input type="text" name="searchKeyword" class="form-control float-left" placeholder="Search">
        
                                <div class="input-group-append">
                                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>                  
                        <tr>
                          <th>SL</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Message</th>
                          <th>Contact Number</th>
                          <th class="text-center">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($careerContact as $key => $value)
                            <tr>
                                <td width="30" class="text-center">{{ $careerContact->firstItem() + $key }}</td>
                                <td>{{ $value->name }}</td>  
                                <td>{{ $value->email }}</td>  
                                <td>{{ $value->message }}</td>  
                                <td>{{ $value->contact_number }}</td>  
                                <td width="100" class="text-center">
                                    @if ($value->status === 'Replied')
                                    <a href="{{ route('admin.career.contact.status.update', $value->id) }}" class="btn btn-sm btn-success">Replied</a>
                                    @else
                                    <a href="{{ route('admin.career.contact.status.update', $value->id) }}" class="btn btn-sm btn-warning">Pending</a>
                                    @endif
                                </td>
                            </tr>  
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                    <div class="d-flex justify-content-center">
                        {!! $careerContact->links() !!}
                    </div>  
                </div>
              </div>
          </div>
        </div>
      </section>
@endsection

@push('script')

@endpush