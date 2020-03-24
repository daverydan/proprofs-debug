@extends('layouts.app')

@section('content')
    <div class="container">
        <video width="100%" height="500" controls>
            <source src="{{ asset('/ProProfs_Course_Login_Errors.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
@endsection
