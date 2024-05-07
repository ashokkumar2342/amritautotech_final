@extends('admin.layout.base')
@push('links')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@endpush
@section('body')

<section class="content">
    <div class="box">
      <div class="box-body">
        {!! Form::open(['route'=>['admin.student.fee.update',$studentFee->id]]) !!}
      <div class="row">
      
             {!! Form::hidden('student_id', $studentFee->id, []) !!}  
                                 
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('total_fees','Total Fees',['class'=>' control-label']) }}                         
                              {{ Form::text('total_fees',$studentFee->total_fees,['class'=>'form-control','required','readonly']) }}
                              <p class="text-danger">{{ $errors->first('total_fees') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-6">                         
                          <div class="form-group">
                              {{ Form::label('installment_fees','Installment Fees',['class'=>' control-label']) }}                         
                              {{ Form::text('installment_fees',$studentFee->installment_fees,['class'=>'form-control','required','readonly']) }}
                              <p class="text-danger">{{ $errors->first('installment_fees') }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>{{--row end --}}   
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('discount_type','Discount Type',['class'=>' control-label']) }} 
                              {!! Form::hidden('discount_type_id', $studentFee->discount_type_id, []) !!}                        
                              {{ Form::text('discount_name',$studentFee->discount_name ,['class'=>'form-control','required','readonly']) }}
                              <p class="text-danger">{{ $errors->first('discount_type') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-6">                         
                          <div class="form-group">
                              {{ Form::label('discount','Discount',['class'=>' control-label']) }}
                             
                                         
                              {{ Form::text('discount',$studentFee->discount,['class'=>'form-control','readonly']) }}
                              
                              
                            
                              <p class="text-danger">{{ $errors->first('discount') }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>{{--row end --}}   
       <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('receipt_no','Receipt No *',['class'=>' control-label']) }}                         
                              {{ Form::text('receipt_no',$studentFee->receipt_no,['class'=>'form-control required']) }}
                              <p class="text-danger">{{ $errors->first('receipt_no') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-6">                         
                          <div class="form-group">
                              {{ Form::label('receipt_date','Receipt Date',['class'=>' control-label']) }}                         
                              {{ Form::text('receipt_date',$studentFee->receipt_date,['class'=>'form-control datepicker','required']) }}
                              <p class="text-danger">{{ $errors->first('receipt_date') }}</p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>{{--row end --}} 
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
              <div class="form-group">
                  <div class="col-md-12">
                  <div class="col-lg-6">                         
                          <div class="form-group">
                          
                              {{ Form::label('other_fee','Other Fee',['class'=>' control-label']) }}                         
                              {{ Form::number('other_fee',$studentFee->other_fee,['class'=>'form-control required']) }}
                              <p class="text-danger">{{ $errors->first('other_fee') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-6 ">                         
                          <div class="form-group">
                              {{ Form::label('amount_payable','Amount Payable ',['class'=>' control-label']) }}                         
                              {{ Form::number('amount_payable',$studentFee->amount_payable,['class'=>'form-control required']) }}
                              <p class="text-danger">{{ $errors->first('received_fees') }}</p>
                          </div>
                      </div>
                       
                  </div>
              </div>
          </div>
      </div>{{--row end --}}
      <hr>
      <div class="row">{{--row start --}}
          <div class="col-md-12 ">
          <h5 style="margin-left: 30px;">If Payment Mode is Cheque</h5>
              <div class="form-group">
                  <div class="col-md-12">
                       <div class="col-lg-4">                         
                          <div class="form-group">
                              {{ Form::label('cheque_no','Cheque No',['class'=>' control-label']) }}                         
                              {{ Form::text('cheque_no',$studentFee->cheque_no,['class'=>'form-control']) }}
                              <p class="text-danger">{{ $errors->first('cheque_no') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-4">                         
                          <div class="form-group">
                              {{ Form::label('bank_name','Bank Name',['class'=>' control-label']) }}                         
                              {{ Form::text('bank_name',$studentFee->bank_name,['class'=>'form-control']) }}
                              <p class="text-danger">{{ $errors->first('bank_name') }}</p>
                          </div>
                      </div>
                       <div class="col-lg-4">                         
                          <div class="form-group">
                              {{ Form::label('cheque_date','Cheque Date',['class'=>' control-label']) }}                         
                              {{ Form::text('cheque_date',$studentFee->cheque_date,['class'=>'form-control datepicker']) }}
                              <p class="text-danger">{{ $errors->first('cheque_date') }}</p>
                          </div>
                      </div>  
                  </div>
              </div>
          </div>
      </div>{{--row end --}} 
       </div>
       <div><button class="btn btn-primary pull-right">Update</button></div>
       {!! Form::close() !!}
    </div>
    </div>
</section>  
     
@endsection
@push('links')
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@endpush
 @push('scripts')

 <script type="text/javascript" src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 <script type="text/javascript">
     $(document).ready(function(){
      $( ".datepicker" ).datepicker({dateFormat:'dd-mm-yy'});
        $('#dataTable').DataTable();
    });
     var errors = '{{ $errors->first() }}';
     if (errors) {
      $("#addfee").modal('show');
     }
 </script>
 <script type="text/javascript">
  $(document).ready(function(){
    $('#showImg').on('click','a',function(){
      $('#showImg').hide();
      $('#changeImg').removeClass('hidden');
    });
    $('#amount_payable').change(function(){
      $('#balance_fees').val({{ $studentFee->installment_fees-$studentFee->discount }}-$(this).val());
    });
    $('#amount_payable').keyup(function(){
      $('#balance_fees').val({{ $studentFee->installment_fees-$studentFee->discount }}-$(this).val());
    });
    $('#changeImg').on('click','a',function(){
      $('#changeImg').addClass('hidden');
      $('#showImg').show();
    });
  });
</script>
@endpush