@section('stylesheets')
<link rel="stylesheet" type="text/css" href="{{ url('css/pages/admin/admin.css') }}">
@endsection
@section('title', 'Admin')
@section('content')
<div id="wrapper">
    @include('includes._adminHeader')
</div>
@endsection
