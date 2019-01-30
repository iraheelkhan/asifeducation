@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Educational </strong>
                    <small> Details</small>
                </div>
                @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                <form action="{{ route('FirstEducationStore')}}" method="post">
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
                        <label for="title" class=" form-control-label">Degree Name</label>
                        <input type="text" id="title" placeholder="Enter your degree name" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-control-label">Degree Description</label>
                        <input type="text" id="description" placeholder="Enter your last name" class="form-control" name="description">
                    </div>
                    
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="passing_year" class=" form-control-label">Passing Year</label>
                                <input type="text" id="passing_year" placeholder="Enter Passing Year" class="form-control" name="passing_year">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="marks" class=" form-control-label">Marks Percentage</label>
                                <input type="text" id="postal-code" placeholder="Enter Marks in Percentage" class="form-control" name="marks">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="institute" class=" form-control-label">Institute Name</label>
                        <input type="text" id="institute" placeholder="Name of the Institute" class="form-control" name="institute">
                    </div>
                    <div class="form-group">
                        <label for="from_date" class=" form-control-label">Starting Date</label>
                        <input type="date" id="from_date" class="form-control" name="from_date">
                    </div>
                    <div class="form-group">
                        <label for="to_date" class=" form-control-label">Ending Date</label>
                        <input type="date" id="to_date" class="form-control" name="to_date">
                    </div> 
                    <div class="form-group">
                        <input class="form-control btn btn-primary" type="submit" name="submit">
                    </div>  
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection