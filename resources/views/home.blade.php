{{-- we are going to interact with it like its a custom html tag
we call it x layout so its unique and doesnot interfer with existing html tags --}}

{{-- this is displaying the layout --}}
{{-- //we need a way of setting what he dasboard name is for each page to be dynamic
we can pass this in as a prop heading=""  --}}
{{-- or a named slot --}}
{{-- slots are diffrent places we can paste content we can have slots anywheere in our html body  --}}
{{--  --}}


<x-layout  >
    {{-- so we solve this problem by using a heading slot which refeences our varible in x layout --}}
<x-slot:heading>
Welcome
</x-slot:heading>





</x-layout>
