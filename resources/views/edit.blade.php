<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>
    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body ng-app="admin">
    <div class="container" ng-controller="editHome">
        <form action="{{url('pages/home')}}" class="form-horizontal" method="post">
            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <h1>Main page data</h1>
            <div class="form-group"><label>Title:</label> <input class="form-control" type="text" name="title" value="{{$home->title}} "></div>

            <div class="form-group"><label>Description:</label> <input class="form-control"type="text" name="description" value="{{$home->description}}"></div>

            <div class="form-group"><label>Content-logo:</label> <input class="form-control" type="text" name="logo" value="{{$home->content->logo}}" ></div>
            {{--<h1>Menu</h1>
            @foreach ($home->content->menu as $item)
                <h4>{{$item->title}}</h4>
            <div class="form-group"><label>Menu-url:</label> <input class="form-control" type="text"  value="{{$item->url}}"></div>
            <div class="form-group"><label>Menu-title:</label> <input class="form-control" type="text"  value="{{$item->title}}"></div>
            @endforeach
            <h1>Header</h1>
            <div class="form-group"><label>Board(class):</label> <input class="form-control" type="text"  value="{{$home->content->header->board}}"></div>
            <div class="form-group"><label>Title:</label> <input class="form-control" type="text"  value="{{$home->content->header->title}}"></div>
            <div class="form-group"><label>Slogan:</label> <input class="form-control" type="text"  value="{{$home->content->header->slogan}}"></div>
            <div class="form-group"><label>More button:</label> <input class="form-control" type="text"  value="{{$home->content->header->more}}"></div>
            <h1>Services</h1>
            <div class="form-group"><label>Title:</label> <input class="form-control" type="text"  value="{{$home->content->service->title}}"></div>
            <div class="form-group"><label>Description:</label> <input class="form-control" type="text"  value="{{$home->content->service->description}}"></div>
            <h3>Services items</h3>
            @foreach ($home->content->service->items as $item)
                <h4>{{$item->title}}</h4>
                <div class="form-group"><label>logo:</label> <input class="form-control" type="text"  value="{{$item->logo}}"></div>
                <div class="form-group"><label>title:</label> <input class="form-control" type="text"  value="{{$item->title}}"></div>
                <div class="form-group"><label>text:</label> <input class="form-control" type="text"  value="{{$item->text}}"></div>
            @endforeach
            <h1>Protfolio</h1>
            <div class="form-group"><label>Title:</label> <input class="form-control" type="text"  value="{{$home->content->portfolio->title}}"></div>
            <div class="form-group"><label>Description:</label> <input class="form-control" type="text"  value="{{$home->content->portfolio->description}}"></div>
           <h3>Portfolio items</h3>
            @foreach ($home->content->portfolio->items as $item)
                <h4>{{$item->title}}</h4>
                <div class="form-group"><label>title:</label> <input class="form-control" type="text"  value="{{$item->title}}"></div>
                <div class="form-group"><label>Description:</label> <input class="form-control" type="text"  value="{{$item->description}}"></div>
                <div class="form-group"><label>Preview:</label> <input class="form-control" type="text"  value="{{$item->preview}}"></div>
                <div class="form-group"><label>Modal id:</label> <input class="form-control" type="text"  value="{{$item->modalid}}"></div>
                <div class="form-group"><label>modalimage(url):</label> <input class="form-control" type="text"  value="{{$item->modalimage}}"></div>
                <div class="form-group"><label>Modal title:</label> <input class="form-control" type="text"  value="{{$item->modaltile}}"></div>
                <div class="form-group"><label>Modal description:</label> <input class="form-control" type="text"  value="{{$item->modaldescription}}"></div>
                <div class="form-group"><label>Modal info:</label> <input class="form-control" type="text"  value="{{$item->modalinfo}}"></div>
            @endforeach
            <h1>About</h1>
            <div class="form-group"><label>Title:</label> <input class="form-control" type="text"  value="{{$home->content->about->title}}"></div>
            <div class="form-group"><label>Description:</label> <input class="form-control" type="text"  value="{{$home->content->about->description}}"></div>
            <h3>History</h3>
            @foreach ($home->content->about->history as $item)
                <h4>{{$item->title}}</h4>
                <div class="form-group"><label>title:</label> <input class="form-control" type="text"  value="{{$item->title}}"></div>
                <div class="form-group"><label>Date:</label> <input class="form-control" type="text"  value="{{$item->date}}"></div>
                <div class="form-group"><label>text:</label> <input class="form-control" type="text"  value="{{$item->text}}"></div>
                <div class="form-group"><label>logo:</label> <input class="form-control" type="text"  value="{{$item->logo}}"></div>
                <div class="form-group"><label>state:</label> <input class="form-control" type="text"  value="{{$item->state}}"></div>
            @endforeach
            <h1>Team</h1>
            <div class="form-group"><label>Title:</label> <input class="form-control" type="text"  value="{{$home->content->team->title}}"></div>
            <div class="form-group"><label>Description:</label> <input class="form-control" type="text"  value="{{$home->content->team->description}}"></div>
            <h2>Persons</h2>
            @foreach ($home->content->team->persons as $item)
                <h3>{{$item->name}}</h3>
                <div class="form-group"><label>Name:</label> <input class="form-control" type="text"  value="{{$item->name}}"></div>
                <div class="form-group"><label>Profesion:</label> <input class="form-control" type="text"  value="{{$item->profesion}}"></div>
                <div class="form-group"><label>Photo:</label> <input class="form-control" type="text"  value="{{$item->photo}}"></div>
                <h4>Socials</h4>
                @foreach ($item->socials as $item)
                    <h4>{{$item->icon}}</h4>
                    <div class="form-group"><label>Url:</label> <input class="form-control" type="text"  value="{{$item->url}}"></div>
                    <div class="form-group"><label>Icon:</label> <input class="form-control" type="text"  value="{{$item->icon}}"></div>
                @endforeach
            @endforeach--}}
        <input type="submit">
        </form>


    </div>

    <script src="{{url('../bower_components/angular/angular.js')}}"></script>
    <script src="{{url('../bower_components/angular-resource/angular-resource.js')}}"></script>
    <script src="{{url('js/admin.js')}}"></script>
</body>
</html>