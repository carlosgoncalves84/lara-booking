<html lang="en"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://demo.pisyek.com/book-a-room/_asset/favicon.png">

    <title>Book The Room - Events</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="{{asset("/css/style.css")}}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="https://demo.pisyek.com/book-a-room">Book The Room</a>
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
            <li class="active"><a href="/events">Events</a></li>
        </ol>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Event's Title</th>
                <th>Start</th>
                <th>End</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td><a href="/events/4">Lunch</a></td>
                <td>2:00pm, 5th Feb 2017</td>
                <td>4:00pm, 5th Feb 2017</td>
                <td>
                    <a class="btn btn-primary btn-xs" href="https://demo.pisyek.com/book-a-room/events/4/edit">
                        <span class="glyphicon glyphicon-edit"></span> Edit</a>
                    <form action="https://demo.pisyek.com/book-a-room/events/4" style="display:inline" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="MFb6ikJnggvhBUzykHHuvBxy1ZsivSqcZx04ZQ3o">
                        <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                    </form>

                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><a href="/events/1">Meeting with VC from UAE</a></td>
                <td>10:00am, 6th Feb 2017</td>
                <td>11:00am, 6th Feb 2017</td>
                <td>
                    <a class="btn btn-primary btn-xs" href="https://demo.pisyek.com/book-a-room/events/1/edit">
                        <span class="glyphicon glyphicon-edit"></span> Edit</a>
                    <form action="https://demo.pisyek.com/book-a-room/events/1" style="display:inline" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="MFb6ikJnggvhBUzykHHuvBxy1ZsivSqcZx04ZQ3o">
                        <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                    </form>

                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td><a href="/events/5">Reunión de verificación de eventos</a></td>
                <td>2:00pm, 6th Feb 2017</td>
                <td>2:30pm, 6th Feb 2017</td>
                <td>
                    <a class="btn btn-primary btn-xs" href="https://demo.pisyek.com/book-a-room/events/5/edit">
                        <span class="glyphicon glyphicon-edit"></span> Edit</a>
                    <form action="https://demo.pisyek.com/book-a-room/events/5" style="display:inline" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                    </form>

                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td><a href="/events/2">Meeting Para Penyamun</a></td>
                <td>12:00am, 7th Feb 2017</td>
                <td>2:00am, 7th Feb 2017</td>
                <td>
                    <a class="btn btn-primary btn-xs" href="https://demo.pisyek.com/book-a-room/events/2/edit">
                        <span class="glyphicon glyphicon-edit"></span> Edit</a>
                    <form action="https://demo.pisyek.com/book-a-room/events/2" style="display:inline" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger btn-xs" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                    </form>

                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</div> <!-- /container -->

<footer class="footer">
    <p>
        Built by <a href="">Carlos</a>. Hosting by <a href="Some Third Party">DataKL</a>.
    </p>
    <p>
        Read the <a href="http://blog.pisyek.com/create-room-booking-system-laravel-fullcalendar/">tutorial by Pisyek</a>
    </p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

<script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js"></script>

</body></html>
