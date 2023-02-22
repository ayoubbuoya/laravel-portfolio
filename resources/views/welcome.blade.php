<x-frontend-layout>
    {{-- Hero Primary --}}
    <x-frontend.hero></x-frontend.hero>
    {{-- Promote Tail 100 --}}
    <x-frontend.promote></x-frontend.promote>
    {{-- About Secondary --}}
    <x-frontend.about></x-frontend.about>
    {{-- Skills --}}
    <x-frontend.skills :skills="$skills"></x-frontend.skills>
    {{--  Portfolio  --}}
    <x-frontend.portfolio :skills="$skills" :projects="$projects"></x-frontend.portfolio>
</x-frontend-layout>
