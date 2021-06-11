<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Esileht</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css\bootstrap.min.css" rel="stylesheet')}}">

    <link rel="stylesheet" href="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css')}}">



</head>
<body>

@include('partials.header')


@include('partials.hero')
<div class="container-fluid" id="text" style="position:absolute; z-index: 16; padding: 20px;  background-color: rgb(36, 36, 36); color: #FFDE16; font-family: MADE TOMMY; ">
    <h1 style="text-align: center; margin-top: 30px;">Uus ja populaarne</h1>
</div>


<main>

@yield('content')
    <div class="container-fluid" id="text" style=" background-color: rgb(36, 36, 36); padding: 20px; color: #FFDE16; font-family: MADE TOMMY; ">
        <h1 class="mx-auto" style="text-align: center;">Menüü</h1>
    </div>
</main>

@include('partials.footer')


<script src="{{ asset('/js/app.js')}}"></script>
<script src="{{ asset('https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js')}}">
</script>
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js')}}">
</script>
<script src="{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js')}}">
</script>

</body>
</html>



