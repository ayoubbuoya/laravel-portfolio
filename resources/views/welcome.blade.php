<x-frontend-layout>
    {{-- Hero Section --}}
    <x-frontend.hero></x-frontend.hero>
    {{-- Promote Section --}}
    <x-frontend.promote></x-frontend.promote>
    {{-- About Section --}}
    <x-frontend.about></x-frontend.about>
    {{-- Skills Section --}}
    <x-frontend.skills :skills="$skills"></x-frontend.skills>
    {{--  Portfolio Section --}}
    <x-frontend.portfolio :skills="$skills" :projects="$projects"></x-frontend.portfolio>
    {{-- Services Section --}}
    <x-frontend.services />
    {{-- Contact Section --}}
    <x-frontend.contact />
</x-frontend-layout>
