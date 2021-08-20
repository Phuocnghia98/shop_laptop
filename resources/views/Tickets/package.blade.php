@extends('layout.app')
@section('title', 'Create a ticket')
@section('content')
<form action="contact">
    <label>First name:</label>
    <input type="text" name="firstname" value="Enter your first name">
    <br />
    <label>Last name:</label>
    <input type="text" name="lastname" value="Enter your last name">
    <br />
    <input type="submit" value="Submit">
</form>
@endsection
