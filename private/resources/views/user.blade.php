<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #e3f2fd">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo3" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a href="{{ url ('home')}}" class="navbar-brand">MOBIL-MOBILAN</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo3">
    <ul class="navbar-nav mr-auto mt-lg-0 mt-2">
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('home')}}">Dashboard<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ url('admin')}}">Data<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('laporan')}}">Laporan</a>
      </li>
  </div>
</nav>