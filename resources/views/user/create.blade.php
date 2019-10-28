@extends('layout.master-en')
<html>
<head>
<link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
@section('content')
<body class="bg-dark">
<div id="app">
<user-form></user-form>
</div>
    </body>
@endsection
<script defer src="{{ mix('js/app.js') }}"></script>

</html>















