<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <title>Booking System - Home</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap Compiled and Minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Custom Styles for this template -->
    <link href="{{asset("/css/style.css")}}" rel="stylesheet">

    <!-- Include Date Range Picker -->
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script href="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script href="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>


<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Book The Room</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/events">Events List</a></li>
                <li><a href="/events/create">Add new event</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">


    <div class="row">
        <div clss="col-lg-12">
            <ol class="breadcrumb">
                <li>You are here: <a href="/">Home</a></li>
                <li><a href="/events">Events</a></li>
                <li class="active">Add new event</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">

            <form action='{{ url('/events/' .$event->id) }}' method="PATCH">
                {{ csrf_field() }}
                <div class="form-group ">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" placeholder="C. Goncalves" value="">
                </div>
                <div class="form-group ">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title"
                           placeholder="E.g. Meeting with CEO Kicap Tawar Hebey" value="">
                </div>
                <div class="form-group ">
                    <label for="time">Time</label>
                    <div class="input-group">
                        <input type="datetime" class="form-control" name="time" placeholder="Select your time" value="">
                        <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

</div> <!-- /container -->

<footer class="footer">
    <p>
        Built by <a href="">Carlos</a>. Hosting by <a href="Some Third Party">DataKL</a>.
    </p>
    <p>
        Read the <a href="http://blog.pisyek.com/create-room-booking-system-laravel-fullcalendar/">tutorial by
            Pisyek</a>
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
        integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
        crossorigin="anonymous"></script>

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>

<script type="text/javascript">
    $(function () {
        $('input[name="time"]').daterangepicker({
            "minDate": moment('2017-02-06 7'),
            "timePicker": true,
            "timePicker24Hour": true,
            "timePickerIncrement": 15,
            "autoApply": true,
            "locale": {
                "format": "DD/MM/YYYY HH:mm:ss",
                "separator": " - ",
            }
        });
    });
</script>

</body>
</html>
