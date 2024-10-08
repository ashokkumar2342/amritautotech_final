@extends('admin.layout.base')
@section('body')
    <section class="content">
     {{ Form::open(['route'=>'admin.sms.homework.post']) }}
        <div class="box">
            <div class="box-header">
              <h3 class="box-title">customized SMS</h3>
              <div class="clearfix"><br></div>
              <div class="panel-group">
                <div class="panel panel-default">                 
                  <div class="row">{{--row start --}}
				        <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-8 col-md-offset-2">
                                  <div class="form-group">
                                      @php
                                          $n = 12/count($centers);
                                      @endphp
                                      @foreach($centers as $center)
                                          <div class="col-lg-{{ $n }}">
                                              <div class="radio-custom radio-danger">
                                                  {!! Form::radio('center', $center->id, @$homework->center_id, ['required','id'=>'center'.$center->id]) !!}
                                                  {!! Form::label('center'.$center->id, $center->name, ['class'=>'control-label','style'=>'cursor:pointer']) !!}
                                              </div>
                                          </div>
                                      @endforeach
                                      <p class="text-danger">{{ $errors->first('center') }}</p>
                                    </div>
                                </div>
                             </div>                    
                             <hr>
				              <div class="col-lg-4">                         
				                <div class="form-group">
				                  {{ Form::label('session','Session',['class'=>' control-label']) }}                      
				                   {!! Form::select('session',$sessions, null, ['class'=>'form-control','placeholder'=>'choose Session','required']) !!}
				                    <p class="text-danger">{{ $errors->first('session') }}</p>
				                  </div>
				                </div>
				                <div class="col-lg-4">                         
				                    <div class="form-group">
				                        {{ Form::label('class','Class',['class'=>' control-label']) }}
				                        {!! Form::select('class',[], null, ['class'=>'form-control','placeholder'=>'Select Class','required']) !!}
				                        <p class="text-danger">{{ $errors->first('session') }}</p>
				                    </div>
				                </div>
				                    <div class="col-lg-4">                         
				                    <div class="form-group">
				                        {{ Form::label('section','Section',['class'=>' control-label']) }}
				                        {!! Form::select('section',[]
				                        , null, ['class'=>'form-control','placeholder'=>'Select Section','required']) !!}
				                        <p class="text-danger">{{ $errors->first('session') }}</p>
				                    </div>
				                </div>
				            </div> 	
				          </div> {{--row end --}}                  
              </div>

            </div>
         </div>
        <div class="row">
          <div class="col-md-8 col-md-offset-2 text-right">                      
{{--             <a href="{{ route('admi') }}"><button type="button" class="btn btn-success">Send Sms</button></a>
 --}}          </div>
        </div>
    </div>
    

    	<div class="col-md-8 col-md-offset-2">
    	<div class="box" >
    		<p id="homework"></p>
    		<input type="hidden" name="homeworkId" id="homeworkId">

    		 </div>
    	</div>
   
    {!! Form::close() !!}
</section>

@endsection
@push('links')
@endpush
@push('scripts')
<script type="text/javascript">
	$("#session").change(function(){
        $('#class').html('<option value="">Searching ...</option>');
        $.ajax({
          method: "get",
          url: "{{ route('admin.class.search') }}",
          data: { id: $(this).val() }
        })
        .done(function( response ) {            
            if(response.length>0){
                $('#class').html('<option value="">Select Class</option>');
                for (var i = 0; i < response.length; i++) {
                    $('#class').append('<option value="'+response[i].id+'">'+response[i].alias+'</option>');
                } 
            }
            else{
                $('#class').html('<option value="">Not found</option>');
            }
            
        });
    });
    $("#class").change(function(){
        $('#section').html('<option value="">Searching ...</option>');       
        $.ajax({
          method: "get",
          url: "{{ route('admin.section.search') }}",
          data: { id: $(this).val(), session: $('#session').val() }
        })
        .done(function( response ) {
            if(response.section.length>0){
               $('#section').html('<option value="">Select Section</option>');
                for (var i = 0; i < response.section.length; i++) {
                    $('#section').append('<option value="'+response.section[i].id+'">'+response.section[i].name+'</option>');
                } 
            }
            else{
                $('#section').html('<option value="">Not found</option>');
            }
            
        });
    });
    $("#section").change(function(){
        $('#homework').html('<option value="">Searching ...</option>');   
        $.ajax({
          method: "get",
          url: "{{ route('admin.homework.search') }}",
          data: { section: $(this).val(), session: $('#session').val(), class: $('#class').val() }
        })
        .done(function( response ) {
            if(response.homework){
               	$('#homework').html(response.homework+'<br><button class="btn btn-primary btn-xs">Send Sms</button>');
               	$('#homeworkId').val(response.id);
                
            }
            else{
                $('#homework').html('Not found');
            }
            
        });
    });
</script>
@endpush