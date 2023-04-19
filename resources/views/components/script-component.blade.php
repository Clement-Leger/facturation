@if (isset($cdns))
    @foreach ($cdns as $cdn)
        <script src="{{ $cdn }}"></script>
    @endforeach
@endif

@if (isset($scripts))
    @foreach ($scripts as $script)
        @vite('resources/js/' . $script)    
    @endforeach
@endif