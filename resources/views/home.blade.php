@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-body">
                @if (session('status'))
                <div class="alert alert-succes" role="alert">
                    {{ session ('status')}}
                </div>
                @endif

                @role('admin')
                <p>This is visible to users with the admin role. Get translated to\Laratrust::hashRole('admin')</p>
                @endrole

                @role('pengguna')
                <p>This is visible to users with the pengguna role. Get translated to\Laratrust::hashRole('pengguna')</p>
                @endrole
                
                {{_('You are logged in!')}}

            </div>
        </div>
    </div>
</div>
@endsection
