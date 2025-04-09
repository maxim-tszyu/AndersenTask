@props(['message'])
<div class="my-5">
    <footer class="flex justify-between items-center mb-2">
        <div class="flex items-center">
            <p class="inline-flex items-center mr-3 text-sm dark:text-dark font-semibold">{{ $message->name }}/{{ $message->email }}</p>
            <p class="text-sm text-gray-900">
                <time>{{ $message->created_at }}</time>
            </p>
        </div>
    </footer>
    <p class="dark:text-dark">{{ $message->message }}</p>
</div>
