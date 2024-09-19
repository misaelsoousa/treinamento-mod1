<button class="btn_app">
    {{$slot}}
    @if (!isset($paw) || $paw !== 'false')
        <x-icons path="paw.svg" />
    @endif
</button>