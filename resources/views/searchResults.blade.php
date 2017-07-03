@extends('layouts.app')

@section('content')
<div class="col-md-8 col-md-offset-2">
	<div class="mid">
		<h1>Zoekresultaten voor $ingevoerdeZoekterm</h1>
		<table class="searchresultstable" style="width:100%">
			<tr>
				<th class="col-md-4"><p class="text-center">Categorie</p></th>
				<th class="col-md-4"><p class="text-center">Afbeelding</p></th>
				<th class="col-md-4"><p class="text-center">Aantal keer gedownload</p></th>
			</tr>

			<tr> <td>test1</td><td>test2</td> <td>123</td>
			<tr> <td>test1</td><td>test2</td> <td>123</td>
			<tr> <td>test1</td><td>test2</td> <td>123</td>
		</table>
	</div>
</div>
@endsection