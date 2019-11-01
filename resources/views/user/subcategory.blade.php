@extends('layouts.user')
@section('content')


<div class="text-center mt-5">

    <a href="{{url()->previous()}}" style="float: right; margin-right: 20px;" class="btn btn-primary">&rarr;</a>
    <h1 class="d-inline-flex">{{$subcategory->name}}</h1>
</div>
<section class="container">
    <div class="shadow-sm p-3 mb-3 bg-white rounded my-4" style="font-size: 1.2rem">
    	{!! $subcategory->content !!}
    </div>
<div id="disqus_thread"></div>
</section>




@endsection
@push('js')


<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

var disqus_config = function () {
this.page.url = "{{ url()->current() }}";  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = "{{ $subcategory->id }}" ; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};

(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://roznamah.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

@endpush