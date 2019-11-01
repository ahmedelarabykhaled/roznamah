@extends('layouts.admin')
@section('content')

<style type="text/css">
	th,td
	{
		padding: 15px;
		text-align: center;
	}
</style>

<section dir="rtl">
	<div>
		<a href="{{route('category.create')}} " class="btn btn-success">اضافه موضوع جديد</a>
		<a href="{{route('subcategory.create')}} " class="btn btn-success">اضافه موضوع فرعى جديد</a>
		<h2 class="text-center">كل المواضيع</h2>
		<div>
			<table border="2px" style="width: 100%">
				<thead>
					<th style="width: 20px;">الرقم</th>
					<th>الموضوع</th>
					<th>الموضوعات الفرعيه</th>
					<th>خيارات</th>
				</thead>
				<tbody>
					<?php $count = 1; ?>
					@foreach($categories as $category)
					<tr>
						<td>{{$count++}}</td>
						<td>{{ $category->name }}</td>
						<td>
							@foreach($category->subcategories as $subcategory)
							<ul style="text-align: right;" >
									<li>
										{{$subcategory->name}}
									</li>
							</ul>
							@endforeach
						</td>
						<td>
							<a href="{{route('category.edit',$category->id)}}" style="color: #fc0">تعديل</a>
							<!-- Button trigger modal -->
							<a href="javascript:void(0)" style="color: #900" data-toggle="modal" data-target="#exampleModal">
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
							        هل تريد حذف هذا الموضوع ومعه كل المواضيع الفرعيه الخاصه به
							      </div>
							      <div class="modal-footer"> 
							        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
							        <form style="display: inline-block;" method="post" action="{{route('category.destroy',$category->id)}} ">
							        	@csrf()
							        	@method('delete')
							        	<button class="btn btn-danger">خذف</button>
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
	</div>
</section>



@endsection