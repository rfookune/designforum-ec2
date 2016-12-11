@extends('layouts.frontend')

@section('styles')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
	<style>
		/*.map-iframe {
			position: relative;
		}
		.map-iframe::before {
			position: absolute;
			content: '';
			top: 0;
			left: 0;
			height: 100%;
			width: 100%;
			background: rgba(0,0,0,0.75);
		}*/
	</style>
@endsection

@section('header')
	@include('frontend.contact.includes.header')
@endsection

@section('content')

<div class="section section--light">

	@include('frontend.contact.includes.intro')

	@include('frontend.contact.includes.contact-form')
	
</div>
	

<!-- <div class="map-iframe">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3742.8309258971285!2d57.4806887!3d-20.2658456!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5b41ab3c575f%3A0xa05c06f172fe9915!2sDesign+Forum+Ltd!5e0!3m2!1sen!2sus!4v1477285702701" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div> -->

@endsection

@section('scripts')
	<script src="//cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
	<script>

		$(document).ready(function(){
			$('#hero').parallax({imageSrc: '/img/test/StockSnap_42H3JH8QI5.jpg'});
		});

		$.ajaxSetup({
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }
        });

        $(function(){

        	$('#js-clear').on('click', function(event){
        		event.preventDefault();
        		$('#js-contact-form input[type="text"]').val('');
        		$('#js-contact-form textarea').val('');
        	})

	        $('#js-contact-form').on('submit', function(e){
	        	e.preventDefault();
	        	var url = '/send-message';
	        	var submit_btn = $(this).find('.btn-submit');

	        	submit_btn.html('Sending....');
	        	
	        	$.ajax ({
			    	type: "POST",
			    	url: url,
			        data: $(this).serialize(),
			        dataType: 'json',
			        success: function(data){
			            // swal("Sent!", "Message has been sent.", "success");
			            submit_btn.html('Sent').prop('disabled', true);
			        },
			        error: function(data){
			        	// swal("Error!", "Something went wrong.", "error");
			        	submit_btn.html('Sent').prop('disabled', true);
			        }
			    });
	        });
	    });

	</script>
@endsection
