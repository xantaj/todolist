<x-nav-link :href="route('todos.index')" :active="request()->routeIs('todos.index')">
    {{ __('ToDo List') }}
</x-nav-link>
