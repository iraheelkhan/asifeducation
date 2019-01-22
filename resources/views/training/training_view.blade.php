@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                    @endif
                    <strong>training</strong>
                    <small> Details</small>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#participantModal">
                          Add Participants
                        </button>
                    
                </div>

                <div class="card-body card-block">
                    
                    <table border="1" width="100%">
                        <tr>
                            <td style="width: 50%">Title</td>
                            <td style="width: 50%">{{$data->title}} </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>{{$data->description}}</td>
                        </tr>
                        <tr>
                            <td>Date</td>
                            <td>{{$data->date}}</td>
                        </tr>
                        <tr>
                            <td>Category</td>
                            <td>{{$data->category}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{$data->status}}</td>
                        </tr>
                        <tr>
                            <td>Time</td>
                            <td>{{$data->time}}</td>
                        </tr>
                        <tr>
                            <td>Venue</td>
                            <td>{{$data->venue}}</td>
                        </tr>
                        
                    </table>
                    
                </div>
            </div> 

            <div class="card">


                <div class="card-body card-block">
                    
                    <div class="table-responsive table--no-card m-b-30">
                        <table class="table table-borderless table-striped table-earning">
                            <thead>
                                <tr>
                                <th>id</th>
                                <th width="180px">Full Name</th>
                                <th width="180px">CNIC</th>
                                <th>Action </th>
                                </tr>
                            </thead>    
                            <tbody>
                                <input type="hidden" name="training_id" value="{{$data->id}}" class="form-control">

                                 @foreach($enrolls as $enrol)
                                 <tr>
                                    <td>{{$enrol->id}}</td>
                                    <td width="180">{{$enrol->participant->first_name}} {{$enrol->participant->last_name}}</td>
                                    <td width="180">{{$enrol->participant->cnic}}</td>
                                    <td>
                                        <label class="au-checkbox">
                                            <input type="checkbox" name="" value="{{$enrol->id}}">
                                            <span class="au-checkmark"></span>
                                        </label>
                                        
                                    </td>
                                    {{csrf_field()}}
                                </tr>
                                @endforeach

                                </tbody>
                        </table>
                        </div>
                    
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
@section('modals')
<!-- Modal -->
<div class="modal fade " id="participantModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Participant List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addparticipantform">
        <div class="table-responsive table--no-card m-b-30">
        <table class="table table-borderless table-striped table-earning">
            <thead>
                <tr>
                <th>id</th>
                <th width="180px">name</th>
                <th width="180px">CNIC</th>
                <th>Action </th>
                </tr>
            </thead>    
            <tbody>
                <input type="hidden" name="training_id" value="{{$data->id}}" class="form-control">

                 @foreach($participant as $part)
                 <tr>
                    <td>{{$part->id}}</td>
                    <td width="180">{{$part->first_name}}</td>
                    <td width="180">{{$part->cnic}}</td>
                    <td>
                        <label class="au-checkbox">
                            <input type="checkbox" name="part[]" value="{{$part->id}}">
                            <span class="au-checkmark"></span>
                        </label>
                        
                    </td>
                    {{csrf_field()}}
                </tr>
                @endforeach

                </tbody>
        </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button id="add_participant" type="" class="btn btn-primary">Save changes</button>
        <form>
      </div>
    </div>
  </div>
</div>
  <script type="text/javascript">

     $(document).on('click', '#add_participant', function(event){
        event.preventDefault();
        $.ajax({
            url: '{{route('EnrolmentCreate')}}',
            type: 'POST', 
            data: $("#addparticipantform").serialize(),
            success: function(data){
                swal("Added", "Training Succesfully Added", "success"),
                setTimeout(
                    function(){
                        location.reload();
                        
                            },
                         1500);
                },
            error: function(data){
              swal("Error", "Did not Add", "error");
            }
        });
        
    });
    $(document).ready( function () {
        $('#myTable').dataTable( {
              "scrollX": true
            } );
        });
  </script>
@endsection
