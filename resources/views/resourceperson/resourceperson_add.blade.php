@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9 offset-md-1 mt-5">
            <div class="card">
                <div class="card-header">
                    <strong>Participant</strong>
                    <small> Details</small>
                </div>

                <form action="{{ route('ResourcePersonCreate')}}" method="post">
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
                        <label for="firstname" class=" form-control-label">First Name</label>
                        <input type="text" id="firstname" placeholder="Enter your first name" class="form-control" name="firstname" value="{{old('firstname')}}">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class=" form-control-label">Last Name</label>
                        <input type="text" id="lastname" placeholder="Enter your last name" class="form-control" name="lastname" value="{{old('lastname')}}">
                    </div>
                    <div class="form-group">
                        <label for="cnic" class=" form-control-label">CNIC/Passport</label>
                        <input type="text" id="cnic" placeholder="Enter your CNIC" class="form-control" name="cnic" value="{{old('cnic')}}">
                    </div>
                    <div class="form-group">
                        <label for="cnic" class=" form-control-label">Gender</label>
                        <select name="gender"  value="{{old('gender')}}" class="form-control">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="designation" class=" form-control-label">Designation</label>
                                <input type="text" id="designation" placeholder="Enter your designation" class="form-control" name="designation" value="{{old('designation')}}">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="cell_number" class="form-control-label">Cell Number</label>
                                <input type="text" id="cell_number" placeholder="cell number" class="form-control" name="cell_number" value="{{old('cell_number')}}">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="email" id="email" placeholder="www.cvmaker.com.pk" class="form-control" name="email" value="{{old('email')}}">
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