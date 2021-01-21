@extends('templates.structure')

@section('content')

    <!-- Page header -->
    <div class="page-top-section">
		<div class="overlay"></div>
		<div class="container text-right">
			<div class="page-info">
				<h2>Contact</h2>
				<div class="page-links">
					<a href="#">Home</a>
					<span>Contact</span>
				</div>
			</div>
		</div>
	</div>
    <!-- Page header end-->

    <!-- Google map -->
    <div class="map" id="map-area"></div>
    
    <!-- Contact section -->
    @include('pages.contact.contactinfo.index')