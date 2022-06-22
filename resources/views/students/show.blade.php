@extends('students.layout')
@section('content')
<br><br>
<div class="row text-center">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3> Student Detail </h3>
        </div>
    </div>
</div><br>
<div class="row text-center">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Firstname:</strong>
            {{ $student->firstname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Lastname:</strong>
            {{ $student->lastname }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Age:</strong>
            {{ $student->age }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
    </div>
</div>
