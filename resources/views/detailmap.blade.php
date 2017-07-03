@extends("layouts.app")

@section('create')
<li><a class="btn pull-right" data-toggle="modal" data-target="#create" onclick="
                                
    //Hier vraag je de id op en geef je het iets mee.
    //Dus met het id titlenew geef je Voeg Categorie Toe mee 
    document.getElementById('titlenew').textContent='Voeg Detailmapje Toe';
    document.getElementById('btnnew').textContent='Voeg Detailmapje Toe';
    document.getElementById('newform').action='detailmap/edit/-1';
    " role="button">Nieuwe Detailmap
</a></li>
@endsection
@section("content")
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    @foreach($categories as $category)
                        <ul class="nav navbar-nav">
                            <li><a></a></li>
                            <li>{{  }}</li>
                                <ul class="navbar-nav list-inline">
                                    
                                    {{-- Edit --}}
                                    <li><a data-toggle="modal" data-target="#edit" onclick="
                                    document.getElementById('titleedit').textContent='Pas Detailmapje Aan'; 
                                    document.getElementById('btnedit').textContent='Pas Detailmapje Aan?'; 
                                    document.getElementById('valuename').value='{{  }}'; 
                                    document.getElementById('editform').action='detailmap/edit/{{  }}';
                                    " role="button">Edit</a></li>
                                    
                                    {{-- Delete --}}
                                    <li><a data-toggle="modal" data-target="#delete" onclick="
                                    document.getElementById('titledel').textContent='Verwijder Categorie(ën)'; 
                                    document.getElementById('btndel').textContent='Verwijder Categorie(ën)?';
                                    document.getElementById('delform').action='detailmap/delete/{{  }}';
                                    " role="button">Delete</a></li>
                                </ul>
                        </ul>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection