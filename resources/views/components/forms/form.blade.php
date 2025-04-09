<form {{$attributes->merge(["class"=>"bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"])}}>
    @if ($attributes->get('method','GET') !== 'GET')
        @csrf
        @method($attributes->get('method'))
    @endif
    {{ $slot }}
    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Send data</button>
</form>
