<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 10/22/17
 * Time: 7:51 AM
 */
?>
<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Student Registration </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <form method="post" action="{{url('students/create')}}">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <h2> Register here!! </h2>
        <div class="row">
            <div class="col-sm-1">
                <label> Name: </label>
            </div>
            <div class="col-sm-1">
                <input type="text" name="Name">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-1">
                <label> Title: </label>
            </div>
            <div class="col-sm-1">
                <input type="text" name="Course">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-1">
                <label> Year: </label>
            </div>
            <div class="col-sm-1">
                <input type="int" name="Year">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-1">
                <label> Faculty: </label>
            </div>
            <div class="col-sm-1">
                <input type="text" name="Faculty">
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-sm-2">
                <button type="submit" class="btn btn-primary"> Submit </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
