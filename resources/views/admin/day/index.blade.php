@extends('layouts.admin')
@section('content')

<style type="text/css">
	table
	{
		min-width: 600px;
	}
	th,td
	{
		text-align: center !important;
		padding: 10px 4px;
	}
	tr:hover
	{
		background-color: #eee;
	}
	tr:nth-child(1):hover
	{
		background-color: #fff;
	}
	tr:nth-child(2):hover
	{
		background-color: #fff;
	}
</style>

<section dir="rtl">
	@if(session('message'))
		<div class="alert alert-success">{{ session('message') }} </div>
	@endif
	<a href="{{route('day.create')}} " class="btn btn-success">اضافه يوم جديد</a>
	<h2 class="text-center">كل الايام</h2>
	<div style="overflow-x: scroll;">
		<table style="width: 100%; margin-top: 10px;margin-bottom:10px ; font-size: 1em;" border="2px" class="mt-4">
		    <tbody>
		        <tr class="text-center" align="center" style="/* background-color: #344;*/color: #fff" >
		            <th rowspan="2">رقم اليوم</th>
		            <th colspan="2">التفاصيل</th>
		            <th rowspan="2">التاريخ</th>
		            <th rowspan="2">الفصل</th>
		            <th rowspan="2">الدر</th>
		            <th colspan="2">التفاصيل</th>
		            <th rowspan="2">النجم</th>
		            <th colspan="2">التفاصيل</th>
		            <th rowspan="2">الطلع</th>
		            <th colspan="2">التفاصيل</th>
		            <th rowspan="2">الفجر</th>
		            <th colspan="2">التفاصيل</th>
		            <th rowspan="2">خيارات</th>
		        </tr>
		        <tr style="/*background-color: #344;*/color: #fff">
		            <th>من</th>
		            <th>المده</th>
		            <th>من</th>
		            <th>المده</th>
		            <th>من</th>
		            <th>المده</th>
		            <th>من</th>
		            <th>المده</th>
		            <th>الشروق</th>
		            <th>الغروب</th>
		        </tr>
		        @foreach($dates as $date)
		        	<tr>
		        		<td>{{$date->day->number}} </td>
		        		<td>{{$date->day->from}} </td>
		        		<td>{{$date->day->duration}} </td>
		        		<td>{{$date->date}} </td>
		        		<td>{{$date->season}} </td>
		        		<td>{{$date->aldor->number}} </td>
		        		<td>{{$date->aldor->from}} </td>
		        		<td>{{$date->aldor->duration}} </td>
		        		<td>{{$date->star->number}} </td>
		        		<td>{{$date->star->from}} </td>
		        		<td>{{$date->star->duration}} </td>
		        		<td>{{$date->altala->number}} </td>
		        		<td>{{$date->altala->from}} </td>
		        		<td>{{$date->altala->duration}} </td>
		        		<td>{{$date->alfajr->number}} </td>
		        		<td>{{$date->alfajr->from}} </td>
		        		<td>{{$date->alfajr->duration}} </td>
		        		<td>
		        			<a href="{{route('day.edit',$date->id)}}" style="color: #fc0" class="">تعديل</a>
		        			<!-- Button trigger modal -->
		        			<a href="javascript:void(0)" style="color: #900" class="d-inline" data-toggle="modal" data-target="#exampleModal">
		        			  حذف
		        			</a>

		        			<!-- Modal -->
		        			<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		        			  <div class="modal-dialog" role="document">
		        			    <div class="modal-content">
		        			      <div class="modal-header">
		        			        <h5 class="modal-title" id="exampleModalLabel">رساله تاكيد</h5>
		        			        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		        			          <span aria-hidden="true">&times;</span>
		        			        </button>
		        			      </div>
		        			      <div class="modal-body">
		        			        هل تريد حذف هذا اليوم
		        			      </div>
		        			      <div class="modal-footer">
		        			        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
		        			        <form class="" style="display: inline" action="{{route('day.destroy',$date->id)}} " method="post">
		        			        	@csrf()
		        			        	@method('delete')
		        			        	<button type="submit" class="btn btn-danger">حذف</button>
		        			        </form>
		        			      </div>
		        			    </div>
		        			  </div>
		        			</div>
		        		</td>
		        	</tr>
		        @endforeach
		    </tbody>
		</table>
	</div>
</section>


@endsection