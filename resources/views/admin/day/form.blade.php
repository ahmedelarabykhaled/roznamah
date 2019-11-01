@extends('layouts.admin')
@section('content')

<style type="text/css">
	.py-2
	{
		padding-top: 10px;
	}
	button, input, optgroup, select, textarea
	{
		margin: 10px 0px;
	}
	.form-control
	{
	    border: 1px #999 solid;
	}
</style>

<section class="py-4" dir="rtl">
	@if(session('message'))
		<div class="alert alert-success">{{ session('message') }} </div>
	@endif
	<a href="{{route('day.index')}}" class="btn btn-info">العوده</a>
	@if(isset($date))
	<h2 class="text-center">تعديل يوم جديد</h2>
	<form method="post" action="{{route('day.update',$date[0]->id)}}">
		@method('put')
	@else
	<h2 class="text-center">اضافه يوم جديد</h2>
	<form method="post" action="{{route('day.store')}}" dir="rtl">
	@endif
		@csrf()
		<div class="py-2">
			<p>رقم اليوم</p>
			<div class="row" dir="rtl">
				<div class="col-md-4 col-sm-6">
					<input type="text" name="day_duration" class="form-control" <?= isset($date) ? "value='".$date[0]->day->duration."'" : "placeholder='المده'" ?> required>
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="text" name="day_from" class="form-control" required <?= isset($date) ? "value='".$date[0]->day->from."'" : "placeholder='من'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="number" name="day_number" class="form-control" min="1" max="366" required <?= isset($date) ? "value='".$date[0]->day->number."'" : "placeholder='رقم اليوم'" ?> >
				</div>
			</div>
		</div>
		<div class="py-2">
			<p>التاريخ</p>
			<input type="date" name="date" class="form-control" required value="{{ isset($date) ? $date[0]->date : '' }}">
		</div>
		<div class="py-2">
			<p>الفصل</p>
			<input type="text" name="season" class="form-control" required <?= isset($date) ? "value='".$date[0]->season."'" : "placeholder='الفصل'" ?> >
		</div>
		<div class="py-2">
			<p>الدر</p>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<input type="text" name="aldr" class="form-control" required <?= isset($date) ? "value='".$date[0]->aldor->duration."'" : "placeholder='المده'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="text" name="aldr_from" class="form-control" required <?= isset($date) ? "value='".$date[0]->aldor->from."'" : "placeholder='من'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="number" name="aldr_duration" class="form-control" min="1" max="366" required <?= isset($date) ? "value='".$date[0]->aldor->number."'" : "placeholder='الدر'" ?> >
				</div>
			</div>
		</div>
		<div class="py-2">
			<p>النجم</p>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<input type="text" name="star" class="form-control" required <?= isset($date) ? "value='".$date[0]->star->duration."'" : "placeholder='المده'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="text" name="star_from" class="form-control" required <?= isset($date) ? "value='".$date[0]->star->from."'" : "placeholder='من'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="number" name="star_duration" class="form-control" min="1" max="366" required <?= isset($date) ? "value='".$date[0]->star->number."'" : "placeholder='النجم'" ?> >
				</div>
			</div>
		</div>
		<div class="py-2">
			<p>الطلع</p>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<input type="text" name="altal" class="form-control" required <?= isset($date) ? "value='".$date[0]->altala->duration."'" : "placeholder='المده'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="text" name="altal_from" class="form-control" required <?= isset($date) ? "value='".$date[0]->altala->from."'" : "placeholder='من'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="number" name="altal_duration" class="form-control" min="1" max="366" required <?= isset($date) ? "value='".$date[0]->altala->number."'" : "placeholder='الطلع'" ?> >
				</div>
			</div>
		</div>
		<div class="py-2">
			<p>الفجر</p>
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<input type="time" name="alfajr_duration" class="form-control" required <?= isset($date) ? "value='".$date[0]->alfajr->duration."'" : "placeholder='الغروب'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="time" name="alfajr_from" class="form-control" required <?= isset($date) ? "value='".$date[0]->alfajr->from."'" : "placeholder='الشروق'" ?> >
				</div>
				<div class="col-md-4 col-sm-6 py-4">
					<input type="number" name="alfajr" class="form-control" min="1" max="366" required <?= isset($date) ? "value='".$date[0]->alfajr->number."'" : "placeholder='الفجر'" ?> >
				</div>
			</div>
		</div>
		<button type="submit" class="btn btn-success">حفظ</button>
	</form>
</section>


@endsection