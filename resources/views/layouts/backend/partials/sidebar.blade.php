<aside id="leftsidebar" class="sidebar">
  <div class="menu">
    <ul class="list">
      <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"> <a href="{{ route('dashboard') }}"> <i class="material-icons">dashboard</i> <span>Dashboard</span> </a> </li>
      <li class="{{ Route::currentRouteName() == 'home-slider.index' || Route::currentRouteName() == 'home-slider.edit' || Route::currentRouteName() == 'home-slider.create' ? 'active' : ''  }}"> <a href="javascript:void(0);" class="menu-toggle {{ Route::currentRouteName() == 'home-slider.index' || Route::currentRouteName() == 'home-slider.edit' || Route::currentRouteName() == 'home-slider.create' ? 'toggled' : ''  }}"> <i class="material-icons">home</i> <span>Banner Manager</span> </a>
        <ul class="ml-menu">
          <li class="{{ Route::currentRouteName() == 'home-slider.index' || Route::currentRouteName() == 'home-slider.edit' || Route::currentRouteName() == 'home-slider.create' ? 'active' : ''  }}"> <a href="{{ route('home-slider.index') }}">Banner Manager</a> </li>
        </ul>
      </li>
      <li class="{{ Route::currentRouteName() == 'home-clients.index' || Route::currentRouteName() == 'home-clients.edit' || Route::currentRouteName() == 'home-clients.create' ? 'active' : ''  }}"> <a href="javascript:void(0);" class="menu-toggle {{ Route::currentRouteName() == 'home-clients.index' || Route::currentRouteName() == 'home-clients.edit' || Route::currentRouteName() == 'home-clients.create' ? 'toggled' : ''  }}"> <i class="material-icons">home</i> <span>Clients Manager</span> </a>
        <ul class="ml-menu">
          <li class="{{ Route::currentRouteName() == 'home-clients.index' || Route::currentRouteName() == 'home-clients.edit' || Route::currentRouteName() == 'home-clients.create' ? 'active' : ''  }}"> <a href="{{ route('home-clients.index') }}">Clients Manager</a> </li>
        </ul>
      </li>
      <li class="{{ Route::currentRouteName() == 'home-faqss.index' || Route::currentRouteName() == 'home-faqss.edit' || Route::currentRouteName() == 'home-faqss.create' ? 'active' : ''  }}"> <a href="javascript:void(0);" class="menu-toggle {{ Route::currentRouteName() == 'home-faqss.index' || Route::currentRouteName() == 'home-faqss.edit' || Route::currentRouteName() == 'home-faqss.create' ? 'toggled' : ''  }}"> <i class="material-icons">home</i> <span>Faqs Manager</span> </a>
        <ul class="ml-menu">
          <li class="{{ Route::currentRouteName() == 'home-faqss.index' || Route::currentRouteName() == 'home-faqss.edit' || Route::currentRouteName() == 'home-faqss.create' ? 'active' : ''  }}"> <a href="{{ route('home-faqss.index') }}">Faqs Manager</a> </li>
        </ul>
      </li>
      <li class="{{ Route::currentRouteName() == 'home-news.index' || Route::currentRouteName() == 'home-news.edit' || Route::currentRouteName() == 'home-news.create' ? 'active' : ''  }}"> <a href="javascript:void(0);" class="menu-toggle {{ Route::currentRouteName() == 'home-news.index' || Route::currentRouteName() == 'home-news.edit' || Route::currentRouteName() == 'home-news.create' ? 'toggled' : ''  }}"><i class="material-icons">home</i> <span>News Manager</span> </a>
        <ul class="ml-menu">
          <li class="{{ Route::currentRouteName() == 'home-news.index' || Route::currentRouteName() == 'home-news.edit' || Route::currentRouteName() == 'home-news.create' ? 'active' : ''  }}"> <a href="{{ route('home-news.index') }}">News Manager</a> </li>
        </ul>
      </li>
      <li class="{{ Route::currentRouteName() == 'category.index' ||  Route::currentRouteName() == 'upload-csv' || Route::currentRouteName() == 'upload-category' || Route::currentRouteName() == 'category.edit' ||  Route::currentRouteName() == 'books.index' ||  Route::currentRouteName() == 'books.create' ||  Route::currentRouteName() == 'books.edit'|| Route::currentRouteName() == 'category.create' ? 'active' : ''  }}"> <a href="javascript:void(0);" class="menu-toggle {{ Route::currentRouteName() == 'category.index' ||  Route::currentRouteName() == 'upload-category'|| Route::currentRouteName() == 'category.edit' || Route::currentRouteName() == 'category.create' ? 'toggled' : ''  }}"> <i class="material-icons">home</i> <span>Book Manager</span> </a>
        <ul class="ml-menu">
          <li class="{{ Route::currentRouteName() == 'category.index' || Route::currentRouteName() == 'category.edit'  || Route::currentRouteName() == 'upload-csv' ||  Route::currentRouteName() == 'upload-category'|| Route::currentRouteName() == 'category.create' ? 'active' : ''  }}"> <a href="{{ route('category.index') }}">Subject</a> 
         
          </li>
          <li class="{{ Route::currentRouteName() == 'books.index' ||  Route::currentRouteName() == 'upload-csv' || Route::currentRouteName() == 'books.edit'  || Route::currentRouteName() == 'books.create' ? 'active' : ''  }}"> <a href="{{ route('books.index') }}">Books Add</a> 
        </ul>
      </li>
      <li class="{{ Route::currentRouteName() == 'cms.index' || Route::currentRouteName() == 'cms.edit' || Route::currentRouteName() == 'cms.create' ? 'active' : ''  }}"> <a href="javascript:void(0);" class="menu-toggle {{ Route::currentRouteName() == 'cms.index' || Route::currentRouteName() == 'cms.edit' || Route::currentRouteName() == 'cms.create' ? 'toggled' : ''  }}"> <i class="material-icons">home</i> <span>Cms Manager</span> </a>
        <ul class="ml-menu">
          <li class="{{ Route::currentRouteName() == 'cms.index' || Route::currentRouteName() == 'cms.edit'  || Route::currentRouteName() == 'cms.create' ? 'active' : ''  }}"> <a href="{{ route('cms.index') }}">Cms</a> </li>
        </ul>
      </li>
      
      
      
      <li> <a class="dropdown-item" href="{{ route('ad_logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"> <i class="material-icons">input</i><span>Logout</span></a> </a>
        <form id="logout-form" action="{{ route('ad_logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </li>
    </ul>
  </div>
  <div class="legal">
    <div class="copyright"> &copy; {{ \Carbon\Carbon::now()->format('Y') }} <a href="javascript:void(0);">Admin Panel</a>. </div>
  </div>
</aside>