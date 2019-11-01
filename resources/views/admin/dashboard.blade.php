@extends('layouts.admin')
@section('content')


<h1>All The Dates</h1>
<a href="{{route('day.create')}} " class="btn btn-primary">add new date</a>

<table class="table table-hover">
    <thead>
        <th>id</th>
        <th>day</th>
        <th>season</th>
        <th>al dor</th>
        <th>the star</th>
        <th>al dala</th>
        <th>al fajr</th>
    </thead>
    <tbody>
        <tr>
            <td>4</td>
            <td>438</td>
            <td>summer</td>
            <td>34</td>
            <td>34</td>
            <td>ere</td>
            <td>ere</td>
        </tr>
    </tbody>
</table>


@endsection