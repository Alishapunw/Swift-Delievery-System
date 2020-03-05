  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Swift Delivery System</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
  </head>
  <body>
  <nav class="light-blue lighten-1" role="navigation">
      <div class="nav-wrapper container"><a id="logo-container" href="{{route('homepage')}}" class="brand-logo">SDS</a>
        <ul class="right hide-on-med-and-down">
          <li><a href="{{route('home')}}">Login</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
          <li><a href="{{route('home')}}">Login</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
    </nav>
    <div class="container">
      @yield('content')
      </div>
      <footer class="page-footer orange">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Company Bio</h5>
            <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Settings</h5>
            
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Connect</h5>
           
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="{{asset('js/materialize.js')}}"></script>
    <script src="{{asset('js/init.js')}}"></script>

  </body>

  <!-- The core Firebase JS SDK is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/7.9.3/firebase-app.js"></script>

  <!-- TODO: Add SDKs for Firebase products that you want to use
      https://firebase.google.com/docs/web/setup#available-libraries -->

  <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
      apiKey: "AIzaSyDnMYMeRt7DUzz-KLWv1e4XSWWL_f14IYc",
      authDomain: "deliverysystem-b4cd7.firebaseapp.com",
      databaseURL: "https://deliverysystem-b4cd7.firebaseio.com",
      projectId: "deliverysystem-b4cd7",
      storageBucket: "deliverysystem-b4cd7.appspot.com",
      messagingSenderId: "598514110562",
      appId: "1:598514110562:web:cd2c66e18b63e65702813b"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
  </script>