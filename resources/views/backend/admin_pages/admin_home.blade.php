@extends('backend.partials.admin_master')

@section('content')

{{-- <h1>
<p class="text-center" style="padding-top: 250px;">   
home page</p>    
</h1> --}}

<h2>
    <p class="text-center" style="padding-top: 20px;">   
    Projects Overview</p>    
</h2>

<div style="text-align: center">

    <button type="button" class="btn btn1"
    style="     background-color: rgb(184, 221, 255);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                margin-right: 20px;
                color: #333;"
    >Active Projects: 10</button>
    

    <button type="button" class="btn btn1"
    style="     background-color: rgb(184, 221, 255);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                color: #333;"
    >Completed Projects: 10</button>

    <button type="button" class="btn btn1"
    style="     background-color: rgb(184, 221, 255);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                margin-left: 20px;
                color: #333;"
    >Queued Projects: 10</button>

</div>



<h2>
    <p class="text-center" style="padding-top: 20px;">   
    Tasks Overview</p>    
</h2>

<div style="text-align: center">

    <button type="button" class="btn btn1"
    style="     background-color: rgb(217, 226, 235);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                margin-right: 20px;
                color: #333;"
    >Active Tasks: 10</button>
    

    <button type="button" class="btn btn1"
    style="     background-color: rgb(217, 226, 235);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                color: #333;"
    >Completed Tasks: 10</button>

    <button type="button" class="btn btn1"
    style="     background-color: rgb(217, 226, 235);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                margin-left: 20px;
                color: #333;"
    >Queued tasks: 10</button>

</div>

<h2>
    <p class="text-center" style="padding-top: 20px;">   
    Users Overview</p>    
</h2>

<div style="text-align: center">
    {{-- <div style="padding-right: 5px;    
                padding-left: 5px;"> --}}
    <button type="button" class="btn btn1"
    style="     background-color: rgb(248, 232, 255);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                color: #333;
                margin-right: 20px;"
    >Total Users: 10</button>
    {{-- </div> --}}
    

    <button type="button" class="btn btn1"
    style="     background-color: rgb(248, 232, 255);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                color: #333;"
    >Users in Projects: 10</button>


    <button type="button" class="btn btn1"
    style="     background-color: rgb(248, 232, 255);
                box-shadow: inset -5px -5px 0 0 rgba(0, 0, 0, .25);
                font-weight: 500;
                border-radius: 10px;
                width: 400px;
                height: 100px;
                padding: 5px;
                font-size: 2rem;
                margin-left: 20px;
                color: #333;"
    >Users in Tasks: 10</button>

</div>


@endsection
