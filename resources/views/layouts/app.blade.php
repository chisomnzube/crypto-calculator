<!DOCTYPE html>
<html oncontextmenu="return false">
@yield('head')
<body style="background-image: url('img/white-net.jpg');" >

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ route('landingpage') }}">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          {{-- <li class="nav-item active">
            <a class="nav-link" href="{{ route('landingpage') }}">Home <span class="sr-only">(current)</span></a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link" href="{{ route('crypto.exchange') }}">Crypto Exchange</a>
          </li>
          
         
        </ul>
      </div>
    </nav>

    @yield('main-content')
</body>
@yield('script')
</html>