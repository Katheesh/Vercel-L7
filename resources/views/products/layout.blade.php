<!DOCTYPE html>
<html>
<head>
    <title>Laravel 7 CRUD</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <style type="text/css">
    	.content {
            text-align: center;
        }

        .title {
            font-size: 34px;
        }
        .m-b-md {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
  
<div class="container">
	<div class="content">
	    <div class="title m-b-md">
	        VERCEL LARAVEL
	    </div>
	</div>
    @yield('content')
</div>
   
</body>
</html>