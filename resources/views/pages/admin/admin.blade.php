@extends('layouts.base')
@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ url('css/pages/admin/admin.css') }}">
@endsection
@section('title', 'Admin')
@section('content')
<div class="admin__container">
    <div class="admin__content">
        <div class="sidebar__container">
            <h1>sidebar</h1>
        </div>
        <div class="content__container">
            <h1>Content</h1>
        </div>
    </div>
</div>
@endsection
