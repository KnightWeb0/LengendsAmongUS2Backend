<x-layout>

    <x-slot:heading>
       Artist Detials
    </x-slot:heading>


<div class="box-border h-96 w-96 bg-white outline rounded-lg">
image here {{$artist->image}}


<p>Stage name: {{$artist->stagename}} </p>

<p>real name: {{$artist->first_name}} {{$artist->surname}} </p>

<p> Age: {{$artist->age}}</p>

<p> Gender : {{$artist->gender}}</p>

<p>Label with: {{$artist->recordLabel->label_name}} </p>
<br>
<hr>

<h1> band detials</h1>

<p> Band: {{$artist->band->band_name}}</p>
<p> Genre: {{$artist->band->genre}}</p>
<p> joined: {{$artist->band->created_at}} </p>








</div>











</x-layout>
