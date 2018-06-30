<!DOCTYPE html>
<html>
<head>
	<title>Patient History</title>
	@include('hospitall.client.layouts.links')
</head>
<body ng-app = ""> 
  @include('hospitall.client.layouts.navbar')
	<div class="container">
    @yield('content')
	</div>
</body>
</html>
