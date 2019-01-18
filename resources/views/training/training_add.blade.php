@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Training</strong>
                    <small> Details</small>
                </div>

                <form>
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
                                <input type="text" id="postal-code" placeholder="Enter Time  09:00, 12:00, 14:00" class="form-control" name="time">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="province" class=" form-control-label">Category</label>
                                <select class="form-control" name="category">
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
                        <input class="form-control btn btn-primary" type="submit" name="add_training">
                    </div>  
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection