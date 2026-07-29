@extends('layouts.app')

@section('title', 'Главная')

@section('content')
    <x-hero></x-hero>
    {{-- Товары --}}
    <x-sections.products :$products/>
    {{-- Каталог --}}
    <x-sections.catalog :$categories/>
    {{-- Новости --}}
    <x-sections.news :$news/>
@endsection
