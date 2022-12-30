<?php $title = "View Admin";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ URL::asset('css/results.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/sidebar_main.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/top_header.css') }}">

    <style>
        table {
            width: 90%;
            border-collapse: collapse;
            background-color: white;
            overflow: hidden;
            font-weight: bolder;
            margin: 10px auto;
        }

        table th {
            text-align: left;
        }

        table td {
            padding-top: 5px;
            padding:  0;
            align-items: left;
            border-bottom: 1.1px solid rgb(163, 8, 8);
        }

        table tbody td {
            padding-left: 0px;
        }

        table tbody tr:hover {
            /* background-color: #8c66534d; */
            color: rgb(163, 8, 8);
            /* border-radius: 50px; */
            transition: 0.2s;
        }

        table td img {
            width: 30px;
            height: 30px;
            object-fit: cover;
            border-radius: 100px;
        }

        table input {
            width: 80px;
            padding: 5px;
        }
    </style>

    <title>View Admins</title>
</head>

<body>
    @include("admin_module.sidebar");
    <div class="main-content">
        @include("admin_module.top_header");
        <div class="nav">
            <ul class="snip1168">
                <li><a href="{{ route('reg_admin') }}" data-hover="Register Admin">Register Admin</a></li>
                <li class="current"><a href="#" data-hover="View Admins">View Admins</a></li>
            </ul>
        </div>

        <table class="styled-table">
            <thead>
                <th>First Name</th>
                <th>Second Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($data as $data)
                <tr class="active-row">
                    <td>{{$data->fname}}</td>
                    <td>{{$data->sname}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->phone}}</td>
                    <td>
                        <form action="{{ route('delete_admin') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{$data->id}}">
                            <button type="submit" name="delete" class="del pull-right"><i class="las la-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


</body>

</html>