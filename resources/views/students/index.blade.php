<?php
/**
 * Created by PhpStorm.
 * User: vinny
 * Date: 10/23/17
 * Time: 6:30 AM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> Home </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <table class="table-bordered">
        <thead>
        <tr>
            <td> Name </td>
            <td> Course </td>
            <td> Year </td>
            <td> Faculty </td>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student)
        <tr>
            <td> {{$student['Name']}} </td>
            <td> {{$student['Course']}} </td>
            <td> {{$student['Year']}} </td>
            <td> {{$student['Faculty']}} </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
