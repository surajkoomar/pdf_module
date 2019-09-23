<html>
	<head>
		<link rel="stylesheet" type="text/css" href="{{url('assets/css/main.css')}}">
		
	</head>

	
	<div id="header" class="container">
		{{$companyName}}<br>
		{{$companyAddressTitle}}
		<br><br>
		Invoice No: {{mt_rand(1000,9999)}}
	</div>	
	
	<div class="date">
			Berlin {{date('d.m.Y')}}
	</div>

	<div id="body">
		<h4>Dear Customer,</h4>
		<p>dummy text dummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy textdummy text</p>
		
		<table>
			<thead>
				<tr>
					<th class="position center">Position</th>
					<th class="description center">Description</th>
					<th class="center">Unit</th>
					<th class="center">How much</th>
					<th class="center">price</th>
					<th class="center">Total price</th>
				</tr>
			</thead>
			<tbody>
				@php
					$totalAmt = 0;
				@endphp
				@if(count($offerPosition) > 0)
					@foreach($offerPosition as $key=>$value)
						@php
							$indivisualTotalAmt = ($value->quntity)*($value->price);
							$totalAmt += $indivisualTotalAmt;

						@endphp
						<tr>
							<td class="center">{{$value->position}}</td>
							<td class="center">{{$value->description}}</td>
							<td class="center">{{$value->unit}}</td>
							<td class="center">{{$value->quntity}}</td>
							<td class="center">{{$value->price}}</td>
							<td class="center">{{$indivisualTotalAmt}}</td>
						</tr>
					@endforeach
				@endif	
					<tr>
						<td class="center">total</td>
						<td class="center">price</td>
						<td class="center"></td>
						<td class="center"></td>
						<td class="center"></td>
						<td class="center">{{$totalAmt.' $'}}</td>
					</tr>
			</tbody>
		</table>	
	</div>
	<br><br>
	<div id="footer">
		you have to send the monay to
		<br><br>
		bank account:
		<br><br>
		asdffaaafa
		asfasfaa
		14124124124124124
		1241241412414141241242
		<br><br>
		you have 2 week time to send it
		<br><br><br>
		all the best
	</div>	
</html>
