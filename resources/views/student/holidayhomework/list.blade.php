@extends('student.layout.base')
@section('body')
    <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Holiday Homework</h3>
               
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>           
                  <th>Id</th>
                  <th>Date</th>               
                  <th>Class Name</th>
                  <th>Section Name</th>
                  <th>Title</th>
                  <th width="80px">Action</th> 
                  @php $id=1;
                  @endphp                 
                </tr>
                </thead>
                <tbody>
                @foreach($holidayhomeworks as $holidayhomework)
                <tr>
                  <td>{{ $id++ }}</td>
                  <td>{{ $holidayhomework->created_at }}</td>                  
                  <td>{{ $holidayhomework->classes->name }}</td>
                  <td>{{ $holidayhomework->sections->name }}</td>
                  <td>{{ $holidayhomework->title }}</td>
                  <td align="center">
                    {{-- <a class="btn btn-info btn-xs" href="{{ route('admin.holidayhomework.edit',$holidayhomework->id) }}"><i class="fa fa-pencil"></i></a> --}}
                  
                    <a class="btn btn-success btn-xs" href="{{ route('student.holidayhomework.download',$holidayhomework->id) }}"><i class="fa fa-download"></i></a>
                   
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

 <script type="text/javascript">
 $(document).ready(function(){
        $('#dataTable').DataTable();
    });
    
</script>

 @if(Session::has('message'))
<script type="text/javascript">
    Command: toastr["{{ Session::get('class') }}"]("{{ Session::get('message') }}");
</script>
@endif

@endpush

