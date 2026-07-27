@props([
'active'=>false
])

<a {{ $attributes->class([
        'font-medium transition',
        'text-blue-600'=>$active,
        'hover:text-blue-600'
    ]) }}>
    {{ $slot }}
</a>
