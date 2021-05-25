<h3>{{ session('status') }}</h3>
<table class="table">
	<tbody>
		<tr>
			<td class="col-3 text-left">Name</td>
			<td class="col-9 text-left">{{ session('name') }}</td>
		</tr>
		<tr>
			<td class="col-3 text-left">Email</td>
			<td class="col-9 text-left">{{ session('email') }}</td>
		</tr>
		<tr>
			<td class="col-3 text-left">Message</td>
			<td class="col-9 text-left">{{ session('message') }}</td>
		</tr>
	</tbody>
</table>
