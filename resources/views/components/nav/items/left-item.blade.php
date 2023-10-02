<li>
    <a href="{{ route($route) }}" class="block rounded @if(Route::currentRouteName() == $route)){{ "text-primary-700" }} @endif">{{ $title }}</a>
</li>