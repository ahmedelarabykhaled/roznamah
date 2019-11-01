<!DOCTYPE html>
<html>
<head>
    <title>رزنامه</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/materia/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="{{url('css/bootstrap.min.css')}} ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lemonada&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lateef&display=swap" rel="stylesheet">

    <link href="{{url('fonts/css/all.min.css')}}">


    <style type="text/css">
        nav
        {
            font-family: 'Lemonada', cursive;

        }
        section
        {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Lateef', cursive;
            font-size: 1.5rem;
        }
        .block
        {
            border: 2px #344 solid;
            width: 80%;

        }
        .block .upper
        {
            width: 100%;
            height: 50px;
            background-color: #344;
        }
        .block .upper
        {
            position: relative;
            display: flex;
            align-items: center;
        }
        .block .upper .right
        {
            position: absolute;
            right: 0px;
        }
        tr
        {
            height: 40px;
        }
        th,td
        {
            width: 25%;
        }
        a
        {
            color: #fff;
        }
        a:hover
        {
            color: #fff;
            text-decoration: underline;
        }
        
    </style>

</head>
<body>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-primary " dir="rtl">
      <a class="navbar-brand" href="#">
        <img src="https://qataracademy.edu.qa/-/media/Images/QF/calendar-icon.ashx?h=512&la=en&w=512&hash=4EA0150D5D518B141A159327B03935FE17214817&hash=4EA0150D5D518B141A159327B03935FE17214817" alt="" style="width: 50px;height: 40px;" class="mx-3">رزنامه الامارات الفلكيه</a>
    </nav>


@yield('content')
<!-- 
<div style="position: fixed;right: 20px;top: 50%;width: 50px;height: 50px;display: flex;justify-content: center;align-items: center;" class="btn btn-primary rounded-circle shadow ">
    >>
</div>
<div style="position: fixed;left: 20px;top: 50%;width: 50px;height: 50px;display: flex;justify-content: center;align-items: center;" class="btn btn-primary rounded-circle shadow ">
    <<
</div>

 -->
</body>
</html>