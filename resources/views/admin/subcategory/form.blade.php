@extends('layouts.admin')
@section('content')


<section dir="rtl">
	<div>
		@if(session('message'))
			<div class="alert alert-success"> {{session('message')}} </div>
		@endif
		<a href="{{route('category.index')}} " style="border: 1px #000 solid;padding: 9px;border-radius: 5px;color: #000;margin-bottom:10px ">عوده</a>
		@if(isset($subcategory))
		<form method="post" action="{{route('subcategory.update',$subcategory->id)}} ">
			@method('put')
			<h2 class="text-center">تعديل موضوع فرعى</h2>
		@else
		<form method="post" action="{{route('subcategory.store')}} ">
			<h2 class="text-center">اضافه موضوع فرعى جديد</h2>
		@endif
			@csrf()
			<div style="margin: 25px 0px">
				<p>اسم الموضوع الفرعى</p>
				<input type="text" name="name" class="form-control" required <?= isset($subcategory) ? 'value="'.$subcategory->name.'"' : '' ?> >
				<p style="margin: 20px 0px 5px">الموضوع الرئيسى</p>
				<select class="form-control" name="category">
					@foreach($categories as $category)
						<option value="{{$category->id}} " <?php if(isset($subcategory) && $subcategory->category->id == $category->id ){echo "selected";} ?> >{{$category->name}} </option>
					@endforeach
				</select>
				<p style="margin: 20px 0px 5px">المحتوى</p>
				<textarea id="editor" rows="10" name="content" class="form-control" >{{isset($subcategory) ? $subcategory->content : ''}} </textarea>
				<button type="submit" class="btn btn-success" style="margin: 20px 0px 0px ">حفظ</button>
			</div>

		</form>
	</div>
</section>

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script>
	$('textarea').summernote();
</script>

@endpush

@endsection