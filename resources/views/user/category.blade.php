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
    <div class="block my-4" dir="rtl">
        <div class="upper">
        	<h4 class="w-100 text-center" style="color: #fff">{{$category->name}}</h4>
        	<a href="{{url('/')}} " class="btn btn-light ml-4">العوده</a>
        </div>
        <div class="text-center">
        	@if(sizeof($category->subcategories) == 0 )
        		<h2 class="p-5">لا يوجد مواضيع فرعيه لهذا الموضوع</h2>
        	@else
        		<table dir="rtl" border="2px" class="my-4 text-center w-75 mx-auto">
        			<tbody>
        				<?php
        					for ($i=0; $i < sizeof($category->subcategories); $i+=2) { 
        						?>
        							<tr>
        								<td>
        									<a href="{{url('subcategory',$category->subcategories[$i]->id)}} ">
        										{{$category->subcategories[$i]->name}}
        									</a>
        								</td>
        								<?php
        									if ($i+1 < sizeof($category->subcategories)) {
        										?>
        											<td>
        												<a href="{{url('subcategory',$category->subcategories[$i+1]->id)}}">
        													{{$category->subcategories[$i+1]->name}}
        												</a>
        											</td>
        										<?php
        									}
        								?>
        							</tr>
        						<?php
        					}
        				?>
        			</tbody>
        		</table>
        	@endif
        </div>
    </div>
</section>

@endsection