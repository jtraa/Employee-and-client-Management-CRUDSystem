<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="title navbar-brand" href="/">{{config('app.name', 'Admin')}}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
          <li><a class="nav-link disabled"></a></li>
          <li><a class="nav-link disabled"></a></li>
        <li class="nav-item">
          <a class="nav-link" href="/">Homepage</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/company-list">Companies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/employee-list">Employees</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ADMIN</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>