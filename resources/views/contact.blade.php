@extends('master')
@section('style')
    <style>
        .contact_form {
            font-size: 16px;
        }

        .form-control {
            border-radius: 0px;
        }

        label {
            color: #8E1069;
        }

        .btn {
            border: 1px solid #8E1069;
            border-radius: 0px;
            background-color: #8E1069;
            color: white;
        }

        .btn:hover {
            background-color: white;
            color: #8E1069;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row contact_form" style="margin-top:5%;">
            <div class="col-sm-8 col-sm-offset-2">
                <form action="{{url('contact')}}">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input required type="text" class="form-control" id="first_name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name">Last Name</label>
                            <input required type="text" class="form-control" id="last_name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input required type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email">Subject</label>
                            <input required type="text" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="form-group">
                            <label for="email">Message</label>
                            <textarea required class="form-control" rows="5" id="comment"></textarea>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-dark">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection