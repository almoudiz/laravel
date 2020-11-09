<nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Home</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="/posts">My Blogs</a></li>
          <li><a href="/posts/create">Create</a></li>
        </ul>
      </div><!--/.nav-collapse -->

      <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-jet-dropdown-link href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
            {{ __('Logout') }}
        </x-jet-dropdown-link>
    </form>

    </div>
  </nav>