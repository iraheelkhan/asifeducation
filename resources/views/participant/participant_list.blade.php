@extends('layouts.master');
@section('title')
Participant List
@endsection
@section('content')
      <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
              <div class="card">

                <div class="card-body">
                  @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                  <a href="{{route('ParticipantAdd') }}" class="btn btn-primary">New Participant</a>
                  <h2 class="card-title">Participant List</h2>
                 
                  <div class="">
                    <table class="table" id="myTable"> 
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Action</th>
                          <th width="150px">Full Name</th>
                          <th>CNIC</th>
                          <th>Scale</th>
                          <th>Department</th>
                          <th>City/Province</th>
                          <th>Email ID</th>
                        </tr>
                      </thead>
                      <tbody>

                       
                        <?php $index = 1; ?>
                        @foreach($data as $list)
                        <tr>
                              <td> <?= $index++ ?></td>
                              <td> 
                                <form action="{{route('ParticipantDelete')}}" method="POST">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                  <input type="hidden" name="id" value="{{$list->id}}">
                                  <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                                <br>
                                <form action="{{route('ParticipantEdit')}}" method="POST">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="user_id" value="{{$list->id}}">
                                  <button type="submit" class="btn btn-warning"><i class="far fa-edit"></i></button>
                                </form>
                                  
                                
                              </td>
                              
                              <td width="150px">{{ $list->first_name }} {{ $list->last_name }}

                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne{{$list->id}}" aria-expanded="true" aria-controls="collapseOne{{$list->id}}">
                                  Show Trainings
                                </button>

                                <div id="collapseOne{{$list->id}}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  <ul>
                                  @foreach($list->enrolments as $enrol)
                                  <li>
                                      {{$enrol->training->title}}
                                    </li>
                                  @endforeach
                                   </ul>
                                 
                                </div>
                              </div>


                              </td>
                            
                              <td width="180px"> {{ $list->cnic }}</td>
                              <td width="100px"> {{ $list->scale }}</td>
                            
                              <td> {{ $list->department }}</td>
                              <td> {{ $list->province}}
                              </td>
                            
                              <td width="180px"> {{ $list->email }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            
           
          </div>
  <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').dataTable( {
              "scrollX": true
            } );
        });
  </script>
@endsection