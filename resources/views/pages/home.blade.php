@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <x-hero></x-hero>
    {{-- Товары --}}
    <x-sections.products/>
    {{-- Каталог --}}
    <x-sections.catalog/>
    {{-- Новости --}}
    <x-sections.news/>
@endsection
