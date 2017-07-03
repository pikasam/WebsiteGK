@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @foreach($categories as $category)
                        <ul class="nav navbar-nav">
                            <li><img src="{{ $category->catmap_img }}"></li>
                            {{-- HTML::image($category->catmap_img) --}}
                            <li>{{ $category->name }}</li>
                                <ul class="navbar-nav list-inline">
                                    
                                    {{-- Edit --}}
                                    <ul><a data-toggle="modal" data-target="#edit" onclick="
                                    document.getElementById('titleedit').textContent='Pas Categorie Aan'; 
                                    document.getElementById('btnedit').textContent='Pas Categorie Aan?'; 
                                    document.getElementById('valuename').value='{{ $category->name }}'; 
                                    document.getElementById('editform').action='crud/edit/{{ $category->id }}';
                                    " role="button">Edit</a></ul>
                                    
                                    {{-- Delete --}}
                                    <ul><a data-toggle="modal" data-target="#delete" onclick="
                                    document.getElementById('titledel').textContent='Verwijder Categorie(ën)'; 
                                    document.getElementById('btndel').textContent='Verwijder Categorie(ën)?';
                                    document.getElementById('delform').action='crud/delete/{{ $category->id }}';
                                    " role="button">Delete</a></ul>
                                </ul>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
