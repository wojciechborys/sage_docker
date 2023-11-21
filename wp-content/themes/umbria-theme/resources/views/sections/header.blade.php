<header>
    @include('sections.header_upper')
    <div class="container mx-auto">
      <nav class="nav__main">
        <a class="nav__main--logo" href="{{ get_home_url() }}">
          Casa in Umbria
        </a>
        @if (has_nav_menu('left_navigation'))
            {!! wp_nav_menu(['theme_location' => 'left_navigation', 'menu_class' => 'nav__main--left', 'echo' => false]) !!}
        @endif         
      </nav>
    </div>
</header>
