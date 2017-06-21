@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach($categories as $category)
                        <ul class="nav navbar-nav">
                            <li>{{ $category->categorymap_img }}</li>
                            <li>{{ $category->name }}</li>
                            {{-- Edit --}}
                                <ul class="navbar-nav list-inline">
                                    <li><a data-toggle="modal" data-target="#editgame" onclick="document.getElementById('valuename').value='{{ $category->name }}'; document.getElementById('editform').action='crud/edit/{{ $category->id }}';" role="button">Edit</a></li>
                                    {{-- Delete --}}
                                    <li><a data-toggle="modal" data-target="#deletegame" onclick="document.getElementById('delform').action='crud/delete/{{ $category->id }}';" role="button">Delete</a></li>
                                </ul>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
