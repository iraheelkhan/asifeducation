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

                <form action="{{ route('ParticipantCreate')}}" method="post">
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
                        <input type="text" id="firstname" placeholder="Enter your first name" class="form-control" name="firstname">
                    </div>
                    <div class="form-group">
                        <label for="lastname" class=" form-control-label">Last Name</label>
                        <input type="text" id="lastname" placeholder="Enter your last name" class="form-control" name="lastname">
                    </div>
                    <div class="form-group">
                        <label for="cnic" class=" form-control-label">CNIC/Passport</label>
                        <input type="text" id="cnic" placeholder="Enter your CNIC" class="form-control" name="cnic">
                    </div>
                    <div class="row form-group">
                        <div class="col-8">
                            <div class="form-group">
                                <label for="designation" class=" form-control-label">Designation</label>
                                <input type="text" id="designation" placeholder="Enter your designation" class="form-control" name="designation">
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="department" class=" form-control-label">Department</label>
                                <input type="text" id="postal-code" placeholder="Enter Department" class="form-control" name="department">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="province" class=" form-control-label">Province</label>
                        <input type="text" id="province" placeholder="Province name" class="form-control" name="province">
                    </div>
                    <div class="form-group">
                        <label for="district" class=" form-control-label">District</label>
                        <input type="text" id="district" placeholder="District name" class="form-control" name="district">
                    </div>
                    <div class="form-group">
                        <label for="phone" class=" form-control-label">Phone/Landline</label>
                        <input type="text" id="phone" placeholder="phone number" class="form-control" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="cell_number" class="form-control-label">Cell Number</label>
                        <input type="text" id="cell_number" placeholder="cell number" class="form-control" name="cell_number">
                    </div>
                    <div class="form-group">
                        <label for="dob" class=" form-control-label">Date of Birth</label>
                        <input type="date" id="dob" class="form-control" name="dob">
                    </div>
                    <div class="form-group">
                        <label for="email" class=" form-control-label">Email</label>
                        <input type="email" id="email" placeholder="www.cvmaker.com.pk" class="form-control" name="email">
                    </div>

                    <div class="form-group">
                        <label for="degree_qualification" class=" form-control-label">Degree Qualification</label>
                        <textarea id="degree_qualification" name="degree_qualification" cols="10" rows="3" class="form-control">
                        </textarea> 
                    </div>  
                    <!-- <div class="form-group">
                        <label for="picture" class=" form-control-label">Picture</label>
                        <input type="file" name="picture">
                    </div> -->  
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