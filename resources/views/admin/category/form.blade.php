@extends('layouts.admin')
@section('content')

<style type="text/css">
	th,td
	{
		text-align: right;
	}
</style>

<section dir="rtl">
	<div>
		@if(session('message'))
			<div class="alert alert-success"> {{session('message')}} </div>
		@endif
		<a href="{{route('category.index')}} " style="border: 1px #000 solid;padding: 9px;border-radius: 5px;color: #000;margin-bottom:10px ">عوده</a>
		<div></div>
		<a href="{{route('subcategory.create')}} " class="btn btn-success" style="margin-top: 10px;">اضافه موضوع فرعى جديد</a>
		@if(!isset($category))
		<form method="post" action="{{route('category.store')}} ">
			<h2 class="text-center">اضافه موضوع جديد</h2>
			@else
		<form method="post" action="{{route('category.update',$category->id)}} ">
			<h2 class="text-center">تعديل موضوع</h2>
			@method('put')
			@endif
			@csrf()
			<div style="margin: 25px 0px;">
				<p>اسم الموضوع</p>
				<input type="text" name="name" class="form-control" required <?= isset($category) ? 'value="'.$category->name.'"' : ''?> >
				<button type="submit" class="btn btn-success" style="margin: 20px 0px 0px ">حفظ</button>
			</div>
		</form>
		@if(isset($category))
			<div class="tabel-responsive" style="overflow-x: scroll;" >
				<table class="table" border="2px">
					<thead>
						<th>اسم الموضوع الفرعى</th>
						<th>المحتوى</th>
						<th>خيارات</th>
					</thead>
					<tbody>
						@foreach($category->subcategories as $subcategory)
							<tr>
								<td>{{$subcategory->name}} </td>
								<td>{!!$subcategory->content!!} </td>
								<td>
									<a href="{{route('subcategory.edit',$subcategory->id)}} " style="color: #fc0;">تعديل</a>
									<form method="post" action="{{route('subcategory.destroy',$subcategory->id)}} " id="form" style="display: inline">
										@csrf()
										@method('delete')
										<!-- Button trigger modal -->
										<a href="javascript:void(0)" data-toggle="modal" style="color: #900" data-target="#exampleModal">حذف</a>

										<!-- Modal -->
										<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
										  <div class="modal-dialog" role="document">
										    <div class="modal-content">
										      <div class="modal-header text-center">
										        <h5 class="modal-title" id="exampleModalLabel">رساله تاكيد</h5>
										        </button>
										      </div>
										      <div class="modal-body">
										      	هل تريد حذف هذا العنوان الفرعى
										      </div>
										      <div class="modal-footer">
										        <button type="button" class="btn btn-secondary" data-dismiss="modal">الغاء</button>
										        <form method="post" action="{{route('subcategory.destroy',$subcategory->id)}} ">
										        	@csrf()
										        	@method('delete')
										        	<button type="submit" class="btn btn-success">تاكيد</button>
										        	
										        </form>
										      </div>
										    </div>
										  </div>
										</div>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		@endif
	</div>
</section>


<script type="text/javascript">
	function submit_form(e) {
		$('#form').submit();
	}
</script>

@endsection