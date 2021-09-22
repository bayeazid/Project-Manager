@extends('backend.partials.admin_master')

@section('content')

    <div class="padding">

        <div class="color1">
            <h2>
                <p class="text-center"> Projects Overview</p>
            </h2>
            <div class="line-top"></div>
            <div style="text-align: center">

                <button type="button" class="btn btn1">Projects in Progress: 10</button>
                <button type="button" class="btn btn1">Completed Projects: 10</button>
                <button type="button" class="btn btn1">Queued Projects: 10</button>

            </div>
            <div class="line-bottom"></div>
        </div>

        <div class="color1">
            <h2>
                <p class="text-center"> Tasks Overview</p>
            </h2>
            <div class="line-top"></div>
            <div style="text-align: center">

                <button type="button" class="btn btn1">Active Tasks: 10</button>
                <button type="button" class="btn btn1">Completed Tasks: 10</button>
                <button type="button" class="btn btn1">Queued tasks: 10</button>

            </div>
            <div class="line-bottom"></div>
        </div>

        <div class="color1">
            <h2>
                <p class="text-center"> Users Overview</p>
            </h2>
            <div class="line-top"></div>
            <div style="text-align: center">

                <button type="button" class="btn btn1">Total Users: 10</button>
                <button type="button" class="btn btn1">Users in Projects: 10</button>
                <button type="button" class="btn btn1">Users Under Tasks: 10</button>

            </div>
            <div class="line-bottom"></div>
        </div>

    </div>

    <style>
        .btn1 {
            background-color: rgb(236, 240, 245);
            box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
            font-weight: 500;
            border-radius: 10px;
            width: 400px;
            height: 60px;
            padding: 5px;
            font-size: 1.8rem;
            margin-left: 20px;
            color: #333;
            color: rgb(124, 124, 124)
        }

        .h2 {
            padding-top: 60px;
            background-color: rgb(255, 254, 241);
        }

        .line-top {
            background-color: rgb(232, 242, 255);
            width: 1250px;
            padding: 2px;
            margin: auto;

            margin-bottom: 15px;
        }

        .line-bottom {
            background-color: rgb(232, 242, 255);
            width: 1250px;
            padding: 2px;
            margin: auto;
            margin-top: 15px;
        }

        .text-center {
            margin: auto;
            padding-top: 20px;

        }

        .color1 {
            background-color: rgb(255, 251, 246);
            margin-top: 30px;
            margin-top: 30px;
            border-radius: 10px;

        }

        .padding {
            padding-top: 30px;
        }

    </style>

@endsection
