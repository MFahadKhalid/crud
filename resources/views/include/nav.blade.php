<nav style="background: linear-gradient(to right, darkblue, blue );" class="navbar navbar-expand-lg navbar-light">
<div class="container">
<a class="navbar-brand text-light" href="{{route('welcome')}}"><h5>M O S H</h5> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    <li class="nav-item active ml-5">
        <a class="nav-link text-light" href="{{route('countries.index')}}"> <b>Country</b></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{route('teachers.index')}}"><b>Teacher</b> </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link text-light" href="{{route('religions.index')}}"> <b>Religion</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="{{route('students.index')}}"><b>Student</b></a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-danger text-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</div>
</nav>