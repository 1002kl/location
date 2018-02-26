@extends('layouts.client')

@section('content')
<h5 class="total-price text-right"><i class="fa fa-shopping-basket fa-fw fa-2x"></i>
	 Price Total : <span>{{ $total }} Dt</span>  </h5>
<hr />
<table id="mytable" class="table table-bordred table-striped">
	<thead>
		<th>Adresse</th>
		<th>Telephone</th>
		<th>Date Debut</th>
		<th>Voiture</th>
		<th>N' Jour</th>
		<th>Reponse</th>
		<th>Total</th>
	</thead>
	<tbody>
		@foreach($demande as $mydmd)
		<tr>
			<td>{{ $mydmd->adresse }}</td>
			<td>{{ $mydmd->tel }}</td>
			<td>{{ $mydmd->dateDebut }} </td>
			<td>{{ $mydmd->voiture_id }} </td>
			<td>{{ $mydmd->nmbejour }} </td>
			<td>{{ $mydmd->reponse }} </td>
			<td>{{ $mydmd->total }} </td>
		</tr>
	
		@endforeach
	</tbody>
</table>
@endsection
