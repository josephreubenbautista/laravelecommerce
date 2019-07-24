<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  @include('partials.header') 	

  <link rel="stylesheet" type="text/css" href="/css/style.css">

</head>
<body>
<div class="wrapper">
	@include('partials.sidebar')
	<div id="content">
		@include('partials.nav')
		<div class="container-fluid">
	  		@yield('content')
	  	</div>
	</div>
</div>

<script type="text/javascript" src="/js/script.js"></script>
</body>
</html>