@extends('layouts.app')
<!--- Gets the layout from the app.blade.php, this can be found in /resources/views/layouts/app.blade.php --->

<!--- Creates a section in which the content of the page will be displayed --->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header text-center bg-dark text-light">{{ __(' User Dashboard') }}</div>

                <div class="card-body">

                    <!--- Welcomes the user, and gets their data using Laravel's eloquent syntax, and then displays it. --->
                    <p>Welcome back, <b>{{ Auth::user()->name }}</b></p>
                    <br>
                    <p> <b>➤</b> UserID - <b>{{ Auth::user()->id }}</b></p>
                    <hr>
                    <p> <b>➤</b> Email address - <b>{{ Auth::user()->email }}</b></p>
                    <hr>
                    <p> <b>➤</b> Account created - <b>{{ Auth::user()->created_at }}</b></p>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--- Ends section --->
@endsection
