@extends('layouts.admin')
@section('content')


<section dir="rtl">
	<div>
		@if(session('message'))
			<div class="alert alert-success"> {{session('message')}} </div>
		@endif
		<a href="{{route('category.index')}} ">عوده</a>
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

<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>
<script>
	ClassicEditor
	.create( document.querySelector( '#editor' ) )
	.then( editor => {
		console.log( editor );
	} )
	.catch( error => {
		console.error( error );
	} );
</script>


@endsection