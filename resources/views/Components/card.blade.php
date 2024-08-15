@props(['artist'])

<div class="bg-white h-80 w-70 outline outline-2 rounded-lg items-center ">
    <a href="/artists/{{$artist['id']}}"   class="lock px-4 py-6 border border-grey-200 rounded-lg">
    <img src="{{$artist->image}}" alt=""  class="w-80 h-60 p-3 ">
    <div class="font-mono text-xl  text-center"> {{$artist->stagename}} </div>
    <div class="font-mono text-sm  text-center"> {{$artist->band->band_name}} </div>
</a>
</div>
