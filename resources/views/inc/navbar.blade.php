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
          <a class="nav-link" href="/companies">Companies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/employees">Employees</a>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a class="nav-link" href="/companies/create">Add Company</a></li>
        <li><a class="nav-link" href="/employees/create">Add Employee</a></li>
      </ul>
      </form>
    </div>
  </nav>