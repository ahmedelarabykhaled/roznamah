@extends('layouts.user')
@section('content')
<style type="text/css">
	a
	{
		color: #000;
	}
	a:hover
	{
		color: #000;
		text-decoration: underline;
	}
</style>
<section>
    <div class="text-center mt-5">

        <a href="{{url('/')}}" style="float: right; margin-right: 20px;" class="btn btn-primary">&rarr;</a>
        <h1 class="d-inline-flex">{{$category->name}}</h1>

    </div>
    <div class="my-4 container">
            <div class="text-white">
                @foreach($category->subcategories as $category)
                    <a href="{{url('subcategory',$category->id)}}" style="color: #fff;" class="d-block shadow-sm p-3 mb-3 bg-primary rounded"># {{$category->name}}</a>
                @endforeach
            </div>
        </div>
</section>

@endsection