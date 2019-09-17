<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Girls</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        
    </head>
    <body>
        <header>
            <h1 style="color:fuchsia;font-family:verdana;font-size:400%;text-align:center; ">Girls</h1>
       </header>
       <div class="row">
           <button class="float-right btn col-3" style="background-color: fuchsia">Insert</button>
           <button class="float-right btn col-3" style="background-color: fuchsia">Update</button>
           <button class="float-right btn col-3" style="background-color: fuchsia">Delete</button>
           <button class="float-right btn col-3" style="background-color: fuchsia">Search</button>

       </div>
       <div class="row">
           <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
            {{-- <ul> --}}
                @foreach ($g as $item)
                    {{-- <li>{{$item->Fname}} {{$item->Lname}}</li> --}}
                   <a class="list-group-item list-group-item-danger ba" href=""> {{$item->Fname}} <span class="badge-dark">{{$item->Lname}}</span> <br></a>
                @endforeach
            {{-- </ul> --}}
           </div>
        </div>
       </div>
       <div class="row">
            <div class="col-4">
              <div class="list-group" id="list-tab" role="tablist">
                <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a>
                <a class="list-group-item list-group-item-action"  data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Profile</a>
                <a class="list-group-item list-group-item-action"  data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Messages</a>
                <a class="list-group-item list-group-item-action"  data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Settings</a>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">...</div>
                <div class="tab-pane fade"  role="tabpanel" aria-labelledby="list-profile-list">...</div>
                <div class="tab-pane fade"  role="tabpanel" aria-labelledby="list-messages-list">...</div>
                <div class="tab-pane fade"  role="tabpanel" aria-labelledby="list-settings-list">...</div>
              </div>
            </div>
          </div>















    <script src="{{ asset('js/app.js') }}"></script>
        
    <script type="text/javascript"  src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript"  src="bootstrap/js/popper.min.js"></script>
    <script type="text/javascript"  src="bootstrap/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="/js/app.js" ></script>
    </body>
</html>
