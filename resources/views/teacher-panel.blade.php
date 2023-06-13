@extends('layouts.app')
<!--- Gathers the layout of the page from the app.blade.php file, from /resources/views/layouts. --->
@section('content')
<div class="container">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header text-center bg-dark text-light">{{ __(' Teacher Dashboard') }}</div>

                <div class="card-body">

                    <!--- Welcomes the user, with the name they used to create their account. --->
                    <p>Welcome back, <b>{{ Auth::user()->name }}</b></p>

                    <!--- Design layouts to allow teachers to upload their content --->
                    <div class="mb-3">
					  <label for="formFile" class="form-label">Upload course material below.</label>
					  <input class="form-control" type="file" id="formFile">
					  <br>
					  <!-- Button trigger modal -->
					<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
					  Submit
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog">
					    <div class="modal-content">
					      <div class="modal-header justify-content-center bg-dark text-light">
					        <h5 class="modal-title" id="exampleModalLabel">File successfully sent!</h5>
					      </div>
					      <div class="modal-body">
					        Thank you for your contribution, {{ Auth::user()->name}}.
					      </div>
					      <div class="modal-footer justify-content-center">
					        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
					      </div>
					    </div>
					  </div>
					</div>
					</div>
                </div>
            </div>
        </div>

        <!--- Classes will be added here in a later stage of development --->
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header text-center bg-dark text-light">{{ __(' Class dashboard') }}</div>
                	<div class="card-body">

                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection