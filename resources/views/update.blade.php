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

<form action="{{ route('students.update',$student->id) }}" method="POST">

    @csrf
    @method('PUT')

    <h2 class="form-title">UPDATE STUDENT</h2>

    <div class="form-group">
        <label>Name</label>
        <input type="text"
               name="name"
               value="{{ $student->name }}"
               required>
    </div>

    <div class="form-group">
        <label>CGPA</label>
        <input type="number"
               step="0.01"
               min="0"
               max="4"
               name="cgpa"
               value="{{ $student->cgpa }}"
               required>
    </div>

    <button type="submit">
        Update
    </button>

</form>

@endsection