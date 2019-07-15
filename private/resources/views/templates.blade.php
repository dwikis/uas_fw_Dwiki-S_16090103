<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Framework Programming</title>
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
	<link rel="stylesheet" type="text/css" href="{{asset('public/dist/css/bootstrap-datepicker.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/bootstrap_4_3_1/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('public/css/style.css')}}">
	<script type="text/javascript" src="{{ asset('public/js/respond.min.js')}}"></script> 
	<script type="text/javascript" src="{{ asset('public/js/html5shiv.min.js')}}"></script> 
	<script type="text/javascript" src="{{ asset('public/dist/js/bootstrap-datepicker.min.js')}}"></script>
</head>
<body>

		{{-- include file navbar.blade.php --}}
		@include('navbar')
		{{-- memanggil halaman section main --}}
		@yield('main')

		{{-- Memanggil halaman section footer --}}
		@yield('footer')

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{ asset('public/bootstrap_4_3_1/js/bootstrap.min.js')}}"></script> 
	<script type="text/javascript" src="{{ asset('public/js/jquery_3_3_1.min.js')}}"></script> 
	<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
  });
 });
</script>	
</body>
</html>