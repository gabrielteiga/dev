<x-layout :title="$title">
    <x-header :sections='["banner", "about", "projects"]'/>
    <x-section id="banner">
        <x-banner :role="$role"/>
    </x-section>
    <x-section id="about">
        <x-about :about="$about" :stack="$stack" />
    </x-section>
    <x-section id="projects">
        <x-projects :projects="$projects"/>
    </x-section>
    <x-footer />
</x-layout>
