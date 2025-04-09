<x-layout>
    <x-forms.form action="{{route('messages.store')}}" method="POST">
        <x-forms.field label="name" name="name"></x-forms.field>
        <x-forms.field label="email" name="email" type="email"></x-forms.field>
        <x-forms.field label="message" name="message"></x-forms.field>
    </x-forms.form>
    @forelse($messages as $message)
        <x-card :$message></x-card>
    @empty
        <p>There are no messages as of right now</p>
    @endforelse
</x-layout>
