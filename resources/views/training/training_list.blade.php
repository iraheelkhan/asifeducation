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
                  <a  data-toggle="modal" data-target="#ajaxModal"  href="#ajaxModal" class="btn btn-primary">New Training</a>
                  <h2 class="card-title">Training List</h2>
                 
                  <div class="">
                    <table class="table" id="myTable"> 
                      <thead>
                        <tr>
                          <th>S.No</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Date</th>
                          <th>Time</th>
                          <th>Status</th>
                          <th>Category</th>
                          <th>Venue</th>
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
                                  <button type="submit" class="btn btn-danger">D</button>
                                </form>
                                  <a href="" class="btn btn-info">V</a>
                                
                              </td>
                              <td>{{ $list->title }}</td>
                              <td> {{ $list->description }}</td>
                              <td> {{ $list->date }}</td>
                              <td> {{ $list->time }}</td>
                              <td> {{ $list->status }}</td>
                              <td> {{ $list->category}}</td>
                              <td> {{ $list->venue }}</td>
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
          {{-- second modal for the ajax is goes here --}}

  <script type="text/javascript">
    $(document).ready( function () {
        $('#myTable').dataTable( {
              "scrollX": true
            } );
        });
  </script>
@endsection
@section('modals')
<div class="modal fade" id="ajaxModal" tabindex="" role="dialog" aria-labelledby="ajaxModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajaxModalLongTitle">Add Training</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
                <form id="trainingform">
                    {{csrf_field()}}
                    <div class="card-body card-block">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                  @endif
                    <div class="form-group">
                        <label for="title" class=" form-control-label">Title</label>
                        <input type="text" id="title" placeholder="Enter Title for Training" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-control-label">Description</label>
                        <input type="text" id="description" placeholder="Enter  Description" class="form-control" name="description">
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="date" class=" form-control-label">Date of Training</label>
                                <input type="date" id="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="time" class=" form-control-label">Time</label>
                                <input type="text" id="time" placeholder="Enter Time  09:00, 12:00, 14:00" class="form-control" name="time">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="province" class=" form-control-label">Category</label>
                                <select class="form-control" name="category" id="category">
                                    <option value="education">Education</option>
                                    <option value="development">Development</option>
                                    <option value="microsoft">Microsoft</option>
                                </select>
                             </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="venue" class=" form-control-label">Venue/ Room</label>
                                <input type="text" id="venue" placeholder="Venue/ Room name" class="form-control" name="venue">
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="form-group">
                        <input class="form-control btn btn-primary"  id="add_training" type="submit" name="submit">
                    </div>  
                    </div>
                </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
  </div>
  <script type="text/javascript">
    $(document).on('click', '#add_training', function(event){
        event.preventDefault();
        
        var title = $('#title').val();
        var description = $('#description').val();
        var date = $('#date').val();
        var category = $('#category').val();
        var time = $('#time').val();
        var venue = $('#venue').val();
        $.ajax({
            url: '{{route('TrainingCreate')}}',
            type: 'POST',
            // data: {
            //     '_token': '{{csrf_token()}}',
            //     'title': title,
            //     'description': description,
            //     'date': date,
            //     'category': category,
            //     'time': time,
            //     'venue': venue,
            // },
            data: $("#trainingform").serialize(),
            success: function(data){
                swal("Added", "Training Succesfully Added", "success");
            },
            error: function(data){
              console.log('error'); 
            }
        });
        
    });
</script>
@endsection