@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Experience </strong>
                    <small> Details</small>
                </div>
                @if(Session::has('message'))
                    <p class="alert alert-success">{!! Session::get('message') !!}</p>
                  @endif
                <form action="{{ route('FirstExperienceStore')}}" method="post">
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
                        <label for="company_name" class=" form-control-label">Company Name</label>
                        <input type="text" id="company_name" placeholder="Enter your Company Name" class="form-control" name="company_name">
                    </div>
                    <div class="form-group">
                        <label for="designation" class=" form-control-label">Job Position/Designation</label>
                        <input type="text" id="designation" placeholder="Enter your Job Position" class="form-control" name="designation">
                    </div>
                    <div class="form-group">
                        <label for="description" class=" form-control-label">Job Description</label>
                        <input type="text" id="description" placeholder="Enter your job description" class="form-control" name="description">
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="title" class=" form-control-label">Title</label>
                                <input type="text" id="title" placeholder="Enter Title (optional)" class="form-control" name="title">
                            </div>
                        </div>
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