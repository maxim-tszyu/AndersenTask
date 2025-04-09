<x-layout>
    <x-forms.form>
        <x-forms.field label="name" name="name"></x-forms.field>
        <x-forms.field label="email" name="email" type="email"></x-forms.field>
        <x-forms.field label="message" name="message"></x-forms.field>
    </x-forms.form>
    @forelse($messages as $message)

    @empty
        <p>There are no messages as of right now</p>
    @endforelse
</x-layout>
