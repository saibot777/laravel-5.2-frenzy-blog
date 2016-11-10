@extends('layouts.master')

@section('title')
    Contact
@endsection

@section('styles')
    <link rel="stylesheet" href="{{URL::asset('src/css/form.css')}}">
@endsection

@section('content')
    @include('includes.info-box')
    <form action="" id="contact-form" method="post">
        <div class="input-group">
            <label for="name">Your Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="input-group">
            <label for="email">Your Email</label>
            <input type="text" name="email" id="email">
        </div>
        <div class="input-group">
            <label for="subject">Subject</label>
            <input type="text" name="subject" id="subject">
        </div>
        <div class="input-group">
            <label for="message">Your Message</label>
            <textarea name="message" id="message" rows="10"></textarea>
        </div>
        <button type="submit" class="btn">Submit Message</button>
        <input type="hidden" value="{{ Session::token() }}" name="_token">
    </form>
@endsection