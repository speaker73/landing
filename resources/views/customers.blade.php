<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customers</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('css/agency.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{url('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>

        .grid-item { width: 300px;margin-bottom: 10px }
        .grid {position:relative;}

    </style>
</head>
<body>

    <div class="container">


            <h1>Customers</h1>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <td>
                            Name
                        </td>
                        <td>
                            Email
                        </td>
                        <td>
                            Phone
                        </td>
                        <td>
                            Message
                        </td>
                    </tr>
                </thead>
                <tbody>
                @foreach($customers as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->phone}}</td>
                <td>{{$item->message}}</td>
            </tr>
                @endforeach
                </tbody>
            </table>


    </div>

    {{--<div class="container">
       <div class="grid"  data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 300, "gutter": 20 }'>
           @foreach($customers as $item)
            <div class="grid-item">
           <table class="table table-bordered">
                <tr>
                <td>Name</td>
                    <td>{{$item->name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{$item->email}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{$item->phone}}</td>
                </tr>
                <tr>
                    <td>Message</td>
                    <td>{{$item->message}}</td>
                </tr>
            </table>
            </div>
           @endforeach
        </div>--}}
           {{--    <script src="{{url('js/jquery.js')}}"></script>
    <script src="//npmcdn.com/masonry-layout@4.0.0/dist/masonry.pkgd.min.js"></script>--}}

</body>
</html>