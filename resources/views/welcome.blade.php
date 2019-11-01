@extends('layouts.user')
@section('content')

<style type="text/css">
    .row
    {
        margin: 0px !important;
    }
</style>
    <section>
        <div class="block my-4 text-center">
            <div class="content">
                <div class="w-100">
                    <div class="row bg-primary py-3 text-white">
                        <div class="col-3" style="display: flex;justify-content: center;align-items: center;color: #000"> 
                            <div style="width: 40px;height: 40px;display: flex;justify-content: center;align-items: center;border-radius: 50%" class="bg-light" >
                                <a href="{{$date->nextPageUrl()}}" style="color: #000">
                                    <<
                                </a>
                            </div>
                        </div>
                        <div class="col-6">
                            {{$date->items()[0]->date}}
                        </div>
                        <div class="col-3" style="display: flex;justify-content: center;align-items: center;color: #000"> 
                            <div style="width: 40px;height: 40px;display: flex;justify-content: center;align-items: center;border-radius: 50%" class="bg-light" >
                                <a href="{{$date->previousPageUrl()}}" style="color: #000">
                                    >>
                                </a>
                            </div>
                        </div>   
                    </div>
                    <section class="mb-5" dir="rtl">
                        <div class="w-100">
                            <div class="row">
                                <div class="col-6">
                                    الفصل
                                </div>
                                <div class="col-6">
                                    {{$date->items()[0]->season}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="row col-md-6 border" style="display: flex;justify-content: center;align-items: center;">
                                    <div class="col-6">اليوم</div>
                                    <div class="col-6">{{$date->items()[0]->day->number}}</div>
                                </div>
                                <div class="row col-md-6 border">
                                    <div class="col-6">من</div>
                                    <div class="col-6">{{$date->items()[0]->day->from}} </div>
                                    <div class="col-6">المده </div>
                                    <div class="col-6">{{$date->items()[0]->day->duration}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row col-md-6 border" style="display: flex;justify-content: center;align-items: center;">
                                    <div class="col-6">الدر</div>
                                    <div class="col-6">{{$date->items()[0]->aldor->number}}</div>
                                </div>
                                <div class="row col-md-6 border">
                                    <div class="col-6">من</div>
                                    <div class="col-6">{{$date->items()[0]->aldor->from}} </div>
                                    <div class="col-6">المده </div>
                                    <div class="col-6">{{$date->items()[0]->aldor->duration}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row col-md-6 border" style="display: flex;justify-content: center;align-items: center;">
                                    <div class="col-6">النجم</div>
                                    <div class="col-6">{{$date->items()[0]->star->number}}</div>
                                </div>
                                <div class="row col-md-6 border">
                                    <div class="col-6">من</div>
                                    <div class="col-6">{{$date->items()[0]->star->from}} </div>
                                    <div class="col-6">المده </div>
                                    <div class="col-6">{{$date->items()[0]->star->duration}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row col-md-6 border"  style="display: flex;justify-content: center;align-items: center;">
                                    <div class="col-6">الطلع</div>
                                    <div class="col-6">{{$date->items()[0]->altala->number}}</div>
                                </div>
                                <div class="row col-md-6 border">
                                    <div class="col-6">من</div>
                                    <div class="col-6">{{$date->items()[0]->altala->from}} </div>
                                    <div class="col-6">المده </div>
                                    <div class="col-6">{{$date->items()[0]->altala->duration}}</div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="row col-md-6 border"  style="display: flex;justify-content: center;align-items: center;">
                                    <div class="col-6">الفجر</div>
                                    <div class="col-6">{{$date->items()[0]->alfajr->number}}</div>
                                </div>
                                <div class="row col-md-6 border">
                                    <div class="col-6">الشروق</div>
                                    <div class="col-6">{{$date->items()[0]->alfajr->from}} </div>
                                    <div class="col-6">الغروب</div>
                                    <div class="col-6">{{$date->items()[0]->alfajr->duration}}</div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="w-100">
                            <div class="row">
                                <div class="col"></div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
@endsection