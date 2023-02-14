@extends('layouts.app')

@section('content')
<link rel="icon" type="image/png" href="fontend/icon/logo.png" sizes="32x32">
	<link rel="apple-touch-icon" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="72x72" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="114x114" href="fontend/icon/logo.png">
	<link rel="apple-touch-icon" sizes="144x144" href="fontend/icon/logo.png">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Admin Management</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
