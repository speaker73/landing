<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$home->description}}">
    <meta name="author" content="">

    <title>{{$home->title}}</title>

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

</head>

<body id="page-top" class="index">
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">{{$home->content->logo}}</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    @foreach ($home->content->menu as $item)
                    <li>
                        <a class="page-scroll" href="#{{$item->url}}">{{$item->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header {{$home->content->header->board}}>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">{{$home->content->header->title}}</div>
                <div class="intro-heading">{{$home->content->header->slogan}}</div>
                <a href="#services" class="page-scroll btn btn-xl ">{{$home->content->header->more}}</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{$home->content->service->title}}</h2>
                    <h3 class="section-subheading text-muted">{{$home->content->service->description}}</h3>
                </div>
            </div>
            <div class="row text-center">
                @foreach ($home->content->service->items as $item)
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa {{$item->logo}} fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">{{$item->title}}</h4>
                    <p class="text-muted">{{$item->text}}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{$home->content->portfolio->title}}</h2>
                    <h3 class="section-subheading text-muted">{{$home->content->portfolio->description}}</h3>
                </div>
            </div>
            <div class="row">

                @foreach ($home->content->portfolio->items as $item)
                    <div class="col-md-4 col-sm-6 portfolio-item">
                        <a href="#{{$item->modalid}}" class="portfolio-link" data-toggle="modal">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content">
                                    <i class="fa fa-plus fa-3x"></i>
                                </div>
                            </div>
                            <img src="{{$item->preview}}" class="img-responsive" alt="">
                        </a>
                        <div class="portfolio-caption">
                            <h4>{{$item->title}}</h4>
                            <p class="text-muted">{{$item->description}}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{$home->content->about->title}}</h2>
                    <h3 class="section-subheading text-muted">{{$home->content->about->description}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        @foreach ($home->content->about->history as $item)
                        <li class="{{$item->state}}">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive" src="{{$item->logo}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>{{$item->date}}</h4>
                                    <h4 class="subheading">{{$item->title}}</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">{{$item->text}}</p>
                                </div>
                            </div>
                        </li>
                        @endforeach
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="team" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{$home->content->team->title}}</h2>
                    <h3 class="section-subheading text-muted">{{$home->content->team->description}}</h3>
                </div>
            </div>
            <div class="row">

                @foreach ($home->content->team->persons as $item)
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{$item->photo}}" class="img-responsive img-circle" alt="">
                        <h4>{{$item->name}}</h4>
                        <p class="text-muted">{{$item->profesion}}</p>
                        <ul class="list-inline social-buttons">
                            @foreach ($item->socials as $item)
                            <li><a href="{{$item->url}}"><i class="fa {{$item->icon}}"></i></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                @endforeach

            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Aside -->
    <aside class="clients">
        <div class="container">
            <div class="row">
               @foreach ($home->content->sponsors as $item)
                <div class="col-md-3 col-sm-6">
                    <a href="{{$item->url}}">
                        <img src="{{$item->logo}}" class="img-responsive img-centered" alt="">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </aside>
    
    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            {{--<form action="{{ url('customer')}}"  method="POST">
                {!! csrf_field() !!}

                <input name="name" type="text">

                <button type="submit" >Send Message</button>
            </form>--}}
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">{{$home->content->contactform->title}}</h2>
                    <h3 class="section-subheading text-muted">{{$home->content->contactform->description}}</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form method="post" action="{{ url('customer')}}" name="sentMessage" id="contactForm" novalidate>
                        {!! csrf_field() !!}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="name" type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="email" type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input name="phone" type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy; Your Website 2016</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        @foreach($home->content->socials as $item)
                        <li><a href="{{$item->url}}"><i class="fa {{$item->icon}}"></i></a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li><a href="#">Privacy Policy</a>
                        </li>
                        <li><a href="#">Terms of Use</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    @foreach ($home->content->portfolio->items as $item)
    <div class="portfolio-modal modal fade" id="{{$item->modalid}}" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <!-- Project Details Go Here -->
                            <h2>{{$item->modaltile}}</h2>
                            <p class="item-intro text-muted">{{$item->modaldescription}}</p>
                            <img class="img-responsive img-centered" src="{{$item->modalimage}}" alt="">
                            <p>{{$item->modalinfo}}</p>
                            <ul class="list-inline">
                                <li>Date: July 2014</li>
                                <li>Client: {{$item->title}}</li>
                                <li>Category: {{$item->description}}</li>
                            </ul>
                            <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- // Portfolio Modal  -->


    <!-- jQuery -->
    <script src="{{url('js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="{{url('js/classie.js')}}"></script>
    <script src="{{url('js/cbpAnimatedHeader.js')}}"></script>

    <!-- Contact Form JavaScript -->
    <script src="{{url('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('js/contact_me.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{url('js/agency.js')}}"></script>

</body>

</html>
