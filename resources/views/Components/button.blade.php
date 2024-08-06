<a {{$attributes->merge(['class' =>  'rounded-md bg-third px-4 py-2 text-sm font-semibold text-first shadow-sm hover:bg-fourth focus-visible:outlvisible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600'])}}>
{{$slot}}
</a>

{{-- we are settign the defualt style by merge([class]) --}}
