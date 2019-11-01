@extends('layouts.user')
@section('content')

<section>
    <div class="block my-4" dir="rtl" >
        <div class="upper">
        	<h4 class="w-100 text-center" style="color: #fff">{{$subcategory->category->name ." => ". $subcategory->name}}</h4>
        	<a href="{{url('/category',$subcategory->category->id)}} " class="btn btn-light ml-4">العوده</a>
        </div>
        <div class="text-center p-3" style="font-size: 20px">
        	{!! $subcategory->content !!}
        </div>
    </div>
</section>

@endsection