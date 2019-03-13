@extends('home')

@section('info')
	<div class="col-md-8">
            <div class="card">
                <div class="card-header">Skolarine i uplate</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Skolarine i uplate
                </div>
            </div>
        </div>
@endsection