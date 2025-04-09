<form>
    @if ($attributes->get('method','GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    {{ $slot }}
    <button type="submit">Send data</button>
</form>
