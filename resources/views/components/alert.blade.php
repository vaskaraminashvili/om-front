<div>
   @foreach ($categories as $element)

   {{ $element['name'] }}
   <br>
       {{-- expr --}}
   @endforeach
</div>
