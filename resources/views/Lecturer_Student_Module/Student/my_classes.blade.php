<?php $title = "My Classes";
$link = "#";
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/lec_classes.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/top_header.css') }}">
    <title>My Classes</title>
</head>

<body>

    @include("Lecturer_Student_Module.Student.sidebar_main");
    <div class="main-content">
        @include("Lecturer_Student_Module.Student.top_header");
        <main>
            <div class="classes">
                @foreach($data3 as $data3)
                <div class="class-1">
                    <form action="{{ Route('Stud_Class_unit_selector')}}" method="post">
                        @csrf
                        <div class="class-desc">
                            <button type="submit" name="choose_class">
                                <h2>{{$data3->unit_name}}</h2>
                                <hr>
                                <h3>{{$data3->name}}</h3>
                                <p>70 Students</p>
                            </button>
                        </div>
                        <input type="hidden" value="{{$data3->id}}" name="unit_id">
                        <input type="hidden" value="{{$data3->unit_name}}" name="unit_name">
                    </form>
                </div>
                @endforeach
            </div>
        </main>
    </div>

</body>

</html>