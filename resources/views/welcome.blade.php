@extends('layouts.user')
@section('content')

<div class="text-center mt-5">

    <a href="{{$date->previousPageUrl()}}" style="float: right; margin-right: 20px;" class="btn btn-primary">&rarr;</a>
    <h1 class="d-inline-flex">{{$date->items()[0]->date}}</h1>
    <a href="{{$date->nextPageUrl()}}" style="float: left; margin-left: 20px;" class="btn btn-primary">&larr;</a>

    <h3 class=" text-muted ">{{$date->items()[0]->season}}</h3>
</div>
<div class="container mb-5">
    <!--    <div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>-->

    <div id="accordion">
        <div data-toggle="collapse" data-target="#collapse-0" class="shadow-sm p-3 mb-3 bg-white rounded">
            <h4 class="border-bottom pb-2">
                يوم
                <div class="badge badge-primary float-left">{{$date->items()[0]->day->number}}</div>
            </h5>
            <div id="collapse-0" class="collapse show" data-parent="#accordion">
                <div class="row">
                    <div class="col-6 font-weight-bold">من</div>
                    <div class="col-6 text-left">{{$date->items()[0]->day->from}}</div>
                    <div class="col-6 font-weight-bold">المدة</div>
                    <div class="col-6 text-left">{{$date->items()[0]->day->duration}}</div>
                </div>
            </div>
        </div>
        <div data-toggle="collapse" data-target="#collapse-1" class="shadow-sm p-3 mb-3 bg-white rounded">
            <h4 class="border-bottom pb-2">
                الدر
                <div class="badge badge-primary float-left">{{$date->items()[0]->aldor->number}}</div>
            </h5>
            <div id="collapse-1" class="collapse show" data-parent="#accordion">
                <div class="row">
                    <div class="col-6 font-weight-bold">من</div>
                    <div class="col-6 text-left">{{$date->items()[0]->day->from}}</div>
                    <div class="col-6 font-weight-bold">المدة</div>
                    <div class="col-6 text-left">{{$date->items()[0]->day->duration}}</div>
                </div>
            </div>
        </div>
        <div data-toggle="collapse" data-target="#collapse-2" class="shadow-sm p-3 mb-3 bg-white rounded">
            <h4 class="border-bottom pb-2">
                النجم
                <div class="badge badge-primary float-left">{{$date->items()[0]->star->number}}</div>
            </h5>
            <div id="collapse-2" class="collapse show" data-parent="#accordion">
                <div class="row">
                    <div class="col-6 font-weight-bold">من</div>
                    <div class="col-6 text-left">{{$date->items()[0]->star->from}}</div>
                    <div class="col-6 font-weight-bold">المدة</div>
                    <div class="col-6 text-left">{{$date->items()[0]->star->duration}}</div>
                </div>
            </div>
        </div>
        <div data-toggle="collapse" data-target="#collapse-2" class="shadow-sm p-3 mb-3 bg-white rounded">
            <h4 class="border-bottom pb-2">
                الطلع
                <div class="badge badge-primary float-left">{{$date->items()[0]->altala->number}}</div>
            </h5>
            <div id="collapse-2" class="collapse show" data-parent="#accordion">
                <div class="row ">
                    <div class="col-6 font-weight-bold">من</div>
                    <div class="col-6 text-left">{{$date->items()[0]->altala->from}}</div>
                    <div class="col-6 font-weight-bold">المدة</div>
                    <div class="col-6 text-left">{{$date->items()[0]->altala->duration}}</div>
                </div>
            </div>
        </div>
        <div data-toggle="collapse" data-target="#collapse-2" class="shadow-sm p-3 mb-3 bg-white rounded">
            <h4 class="border-bottom pb-2">
                الفجر
                <div class="badge badge-primary float-left">{{$date->items()[0]->alfajr->number}}</div>
            </h5>
            <div id="collapse-2" class="collapse show" data-parent="#accordion">
                <div class="row">
                    <div class="col-6 font-weight-bold">الشروق</div>
                    <div class="col-6 text-left">{{$date->items()[0]->alfajr->from}}</div>
                    <div class="col-6 font-weight-bold">الغروب</div>
                    <div class="col-6 text-left">{{$date->items()[0]->alfajr->duration}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <hr>
        <h3 class="py-2">الموضوعات</h3>
        <div class="text-white">
            @foreach($categories as $category)
                <a href="{{url('category',$category->id)}}" style="color: #fff;" class="d-block shadow-sm p-3 mb-3 bg-primary rounded"># {{$category->name}}</a>
            @endforeach
        </div>
    </div>
</div>


@endsection