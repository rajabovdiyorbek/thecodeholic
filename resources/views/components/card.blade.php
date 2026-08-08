{{-- @props(['color', 'bgColor'=> 'white']) --}}

<div {{ $attributes->class("color-$color background-color-$bgColor") }}>
    somthing
    <div {{ $title->attributes->merge(['lang'=>'us'])->class("card-header") }}>{{ $title }}</div>
</div>
