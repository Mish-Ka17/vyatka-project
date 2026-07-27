@extends('layouts.app')

@section('title', 'Каталог')

@section('content')
    {{-- Каталог --}}
    {{-- Breadcrumbs --}}
    <div class="container-page py-10">
        <x-ui.breadcrumbs
            :items="[
                ['title'=>'Главная','url'=>'/'],
                ['title'=>'Каталог','url'=>'/catalog']
            ]"
        />
    </div>

    <x-sections.catalog/>

@endsection
