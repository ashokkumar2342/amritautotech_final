@extends('student.layout.base')
@section('body')
    <section class="content">
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">Homework</h3>               
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="dataTable" class="table table-bordered table-striped table-hover">
                <thead>
                <tr>           
                  <th>Id</th>
                  <th>Date</th>                   
                  <th>Homework</th>
                  <th width="80px">Action</th>                  
                </tr>
                </thead>
                <tbody>
                  @php $count = 1; 
                  @endphp
                @foreach($homeworks as $homework)
                <tr>
                  <td>{{  $count++}}</td>
                  <td>{{ $homework->created_at }}</td>
                  <td>{{ $homework->homework }}</td>
                  
                  <td align="center">
                     
                    <a class="btn btn-primary btn-xs" href="{{ route('student.homework.view',$homework->id) }}"><i class="fa fa-eye"></i></a>
                  </td>
                </tr>
                @endforeach
                </tbody>                 
              </table>
              <div class="col-md-12">
                {{ $homeworks->links() }}
              </div>
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

 
