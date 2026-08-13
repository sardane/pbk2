@extends('layouts.app')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('students.store') }}" method="POST">

    @csrf

    <h2 class="form-title">STUDENT REGISTRATION</h2>

    <div class="form-group">
        <label>Name</label>
        <input type="text"
               name="name"
               placeholder="Enter student name"
               required>
    </div>

    <div class="form-group">
        <label>CGPA</label>
        <input type="number"
               step="0.01"
               min="0"
               max="4"
               name="cgpa"
               placeholder="Enter CGPA"
               required>
    </div>

    <button type="submit">
        Submit
    </button>

</form>

@endsection