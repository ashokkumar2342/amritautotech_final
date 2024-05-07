@extends('admin.layout.base')
@section('body')
    <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Holiday Homework</h3>
              <div class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title text-right">
                      <a data-toggle="collapse" href="#homework_form">Upload File</a>
                    </h4>
                  </div>
                  <div id="homework_form" class="panel-collapse collapse {{ (@$gallaries || $errors->first())?'in':'' }}">
                    <div class="panel-body ">
                   {{ Form::open(['route'=>'admin.gallery.post','files'=>true]) }} 
                          <div class="row">{{--row start --}}
                              <div class="col-md-12 ">                                    
                                 <div class="col-lg-6">                         
                                    <div class="form-group">
                                        {{ Form::label('title','Title',['class'=>'control-label']) }}
                                         {{ Form::text('title',@$gallaries->title,['class'=>'form-control' ]) }}
                                         <p class="text-danger">{{ $errors->first('title') }}
                                         </p>                           
                                      </div>
                                  </div>
                                  <div class="col-lg-6">                         
                                    <div class="form-group">
                                        {{ Form::label('image','Upload file .jpg, .png,',['class'=>'control-label']) }}
                                         {{ Form::file('image',['class'=>'form-control','required']) }}
                                         <p class="text-danger">{{ $errors->first('image') }}
                                         </p>                           
                                      </div>
                                  </div>
                              </div>
                            </div> 
                          <hr> 
                        <div class="row">
                        <div class="col-md-12 text-center">
                            <button class="btn btn-success">{{'Upload' }}</button>
                        </div>
                    </div>                            
                    {{ Form::close() }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>           
                  <th>Id</th>
                  <th>Date</th>
                   
                  <th>Title</th>
                  <th>image</th>

                  <th width="80px">Action</th>                  
                </tr>
                </thead>
                <tbody>
                @foreach($gallaries as $gallery)
                <tr>
                  <td>{{ $gallery->id }}</td>
                  <td>{{ $gallery->created_at }}</td>                  
                  <td>{{ $gallery->title }}</td>
                  <td>
                  <img src="/storage/gallery/{{ $gallery->image }}" style="height: 50px;">
                  </td> 

                  <td align="center">
                    {{-- <a class="btn btn-info btn-xs" href="{{ route('admin.holidayhomework.edit',$holidayhomework->id) }}"><i class="fa fa-pencil"></i></a> --}}
                    <a class="btn btn-danger btn-md" onclick="return confirm('Are you sure to delete this data ?')" href="{{ route('admin.gallery.delete',$gallery->id) }}"><i class="fa fa-trash"></i></a>
                  </td>
                 
                </tr>
                @endforeach
                </tbody>
                 
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          <!-- Trigger the modal with a button -->
    </section>
    <!-- /.content -->
@endsection
@push('links')
<style type="text/css">
  .feeTable tbody td{
    padding:10px;
    margin:10px;
  }
</style>
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endpush
 @push('scripts')
 <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

 @if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif

@endpush

