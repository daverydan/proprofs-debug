@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
            <label>Parameters:</label><br>
            <strong>user_name:</strong> {{ auth()->user()->name }}<br>
            <strong>user_email:</strong> {{ auth()->user()->email }}<br>
            <strong>passkey:</strong> is hidden in environment variable

            @php
                $course = '452-professional-representative-certification_5e6ba27f2d141';
            @endphp

            <br><br>
            <label style="text-decoration: underline;"><a href="/video">Click here for Error Video</a></label><br>
            <iframe style="height:90vh" name='proprofs' id='proprofs' width='100%' frameborder=0 marginwidth=0 marginheight=0 src='https://www.proprofs.com/training/course/?title={{ $course }}&user_name={{ auth()->user()->name }}&user_email={{ auth()->user()->email }}&passkey={{ env('PROPROFS_SECRET_KEY') }}&embed=true'></iframe>
        </div>
    </div>
</div>
@endsection
