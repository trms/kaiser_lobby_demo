@extends('layouts.default')


@section('content')




<div class="header">
	<img src="img/header_1.jpg" class="front">
	<img src="img/header_2.jpg">
</div>




<img src="img/icon_pin_large.png" class="pin-icon">






<div class="map-container">
	
	<h1>Interactive Directory</h1>
	<h2>Choose a department below to get started:</h2>
	



	<div class="directory">
		
		<div class="title">
			Departments<br>
			<span class="tag hide">(tap to reset)</span>
		</div>
		
		<div class="listings">
			
			

		</div>

	
		<div class="down"><img src="img/arrow_down.png"></div>
		<div class="up"><img src="img/arrow_up.png"></div>

	</div>




	<div class="map active"></div>
	<div class="map"></div>
</div>










<div class="search" id="search-container">
	<input id="search" type="text" placeholder="search for a department" autocomplete="off" >
</div>


@stop