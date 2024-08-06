@props(['active' => false,])

{{-- we have to expliclty delclare our props so it can be disinguished from the attrubutes that it is a prop --}}
{{-- becuase we are checking if active is active we need a defualt behaviour if its is not active we set it to false --}}
<a class="{{ $active  ? 'bg-gray-900 text-white': 'text-third hover:bg-fourth hover:text-white'}}
     rounded-md px-3 py-2 text-sm font-medium"
      aria-current="{{ $active ? 'page': 'false'}}"       {{$attributes}}>

      {{$slot}}</a>
      {{-- aria-current is for screen readers this is to
       see if the current link represents the currnet page and list of pages
       if it is set to false it is not the current page, if its set to true it is the current page --}}

{{-- props are anything that are not attributes   --}}
{{-- props are : anything that is not an attribute --}}

{{-- blade directives begin with a @ symbol  --}}

{{-- we need to set a way for the current link click on to be active but how do we do this ?  --}}

{{-- atrributes are anything thats : id, class,href,src and many more  --}}


