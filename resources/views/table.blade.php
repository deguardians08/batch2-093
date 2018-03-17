@extends("welcome")
@section("content")
<div class="text-right">
	<a href="{{ url('form') }}" class="btn btn-primary">Tambah Data</a>
</div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Kolom header</th>
			<th>Kolom header</th>
			<th>Kolom header</th>
			<th>Kolom header</th>
			<th>Kolom header</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Data</td>
			<td>Data</td>
			<td>Data</td>
			<td>Data</td>
			<td>Data</td>
		</tr>
	</tbody>
</table>
@endsection