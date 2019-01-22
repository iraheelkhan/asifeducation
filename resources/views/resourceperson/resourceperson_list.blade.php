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
                  <a href="{{route('ResourcePersonAdd') }}" class="btn btn-primary">New Participant</a>
                  <h2 class="card-title">Participant List</h2>
                 
                  <div class="">
                    <table class="table" id="myTable"> 
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Action</th>
                          <th width="150px">Full Name</th>
                          <th width="150px">Date of Birth</th>
                          <th width="180px">CNIC/Passport</th>
                          <th>Position/Post</th>
                          <th>Department</th>
                          <th>City/Province</th>
                          <th>District</th>
                          <th>Email ID</th>
                        </tr>
                      </thead>
                      <tbody>

                       
                        <?php $index = 1; ?>
                        @foreach($data as $list)
                        <tr>
                              <td> <?= $index++ ?></td>
                              <td> 
                                <form action="" method="POST">
                                  {{ method_field('DELETE') }}
                                  {{ csrf_field() }}
                                  <input type="hidden" name="id" value="{{$list->id}}">
                                  <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                </form>
                                <br>
                                  <a href="" class="btn btn-info"><i class="far fa-eye"></i></a>
                                
                              </td>
                              
                              <td width="150px">{{ $list->first_name }} {{ $list->last_name }}</td>
                              <td width="150px"> {{ $list->date_of_birth }}</td>
                              <td width="180px"> {{ $list->cnic }}</td>
                              <td> {{ $list->designation }}</td>
                              <td> {{ $list->department }}</td>
                              <td> {{ $list->province}}
                              </td>
                              <td width="180px"> {{ $list->district }}</td>
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