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

                <form method="POST" action="{{route('TrainingUpdate')}}">
                    {{csrf_field()}}
                    <input type="hidden" name="training_id" value="{{$data->id}}">
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
                        <input type="text" id="title" placeholder="Enter Title for Training" class="form-control" name="title" value="{{(!old('title') ? $data->title : old('title'))}}" > 
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-control-label">Description</label>
                        <input type="text" id="description" placeholder="Enter  Description" class="form-control" name="description" value="{{(!old('description') ? $data->description : old('description'))}}"  >
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="from_date" class=" form-control-label">Start Date of Training</label>
                                <input type="date" id="from_date" class="form-control" name="from_date" value="{{(!old('from_date') ? $data->from_date : old('from_date'))}}"  >
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="to_date" class=" form-control-label">End Date of Training</label>
                                <input type="date" id="to_date" class="form-control" name="to_date" value="{{(!old('to_date') ? $data->to_date : old('to_date'))}}"  >
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="province" class=" form-control-label">Category</label>
                                <select value="{{(!old('province') ? $data->province : old('province'))}}" "  class="form-control" name="category">
                                    <option value="education">Education</option>
                                    <option value="development">Development</option>
                                    <option value="microsoft">Microsoft</option>
                                </select>
                             </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="user_id" class=" form-control-label">Cordinator Person</label>
                                <select value="{{(!old('user_id') ? $data->cordinator->name : old('user_id'))}}"   class="form-control" name="user_id">  

                                    @foreach($cordinators as $cordinator)   
                                        <option value="{{$cordinator->id}}">{{$cordinator->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="resourceperson_id" class=" form-control-label">Resource Person</label>
                        <select value="{{(!old('resourceperson_id') ? $data->resourceperson->first_name : old('resourceperson_id'))}}"   class="form-control" name="resourceperson_id">  
                            @foreach($resourceperson as $person)
                                        <option value="{{$person->id}}">{{$person->first_name}}
                                            {{$person->last_name}}</option>
                                    @endforeach
                            
                        </select>
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