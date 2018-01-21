
  <nav class="navbar navbar-inverse"><div class="container-fluid"><img src="logo-custom.png" align="left" width="50px" weight="50px">
      <div class="navbar-header">
          <ul class="nav navbar-nav">
            <li class="dropdown">
            <a href="/home" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }}</a>
            <li role="presentation"><a href="gallery">Gallery</a></li>
            <li role="presentation"><a href="table">Tabel Data</a></li>
            <li role="presentation"><a href="artikel">Jurusan</a></li>
            <li role="presentation"><a href="paragraph">Paraghrap</a></li>
            <li role="presentation"><a href="contac">Contac Me</a></li>
      </div>   
                <a class="nav-link navbar-right" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                  </form>
        </li></div></ul></nav></a></ul></div></nav></div></div>

