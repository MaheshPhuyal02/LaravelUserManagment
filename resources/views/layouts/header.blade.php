{{-- This is a header view included in all views --}}
<!doctype html>
<html lang="en">
 
      <nav style="background-color: blue" class="navbar navbar-expand-sm navbar-light bg-light">
          <a class="navbar-brand" href="{{url('/')}}">UserManagment</a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavId">
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                  <li class="nav-item active">
                      {{-- redirect to home page --}}
                      <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item active">
                      {{-- redirect to create page using route url can also be used//
                        url('/login')
                        --}}
                      <a class="nav-link" href="{{route('create')}}">Register</a>
                  </li>
                  <li class="nav-item active">
                      {{-- Redirect to users page --}}
                      <a class="nav-link" href="{{route('users')}}">Users</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" style="z-index: 222px" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="{{url('/create-session')}}">Create Session</a>
                        <a class="dropdown-item" href="{{url('/view-session')}}">View Session</a>
                        <a class="dropdown-item" href="{{url('/users/trash')}}">Trash</a>
                  
                    </div>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0" action="{{route('getSearchResult')}}">
                  <input name="input" class="form-control mr-sm-2" type="text" placeholder="Search name">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
      </nav>
    <!-- Optional JavaScript -->
 </body>
</html>