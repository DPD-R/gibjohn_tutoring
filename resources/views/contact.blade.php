@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header text-center bg-dark text-light">{{ __(' Contact') }}</div>

                <div class="card-body">
					<form>
					  <div class="mb-3">
					    <label for="text1" class="form-label2">Issue encountered/suggestions:</label>
					    <div><input type="text" class="form-control" id="text1" aria-describedby="issue"></div>
					  </div>
						<button type="button" class="btn btn-outline-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
						  Submit
						</button>
						
						<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						  <div class="modal-dialog">
						    <div class="modal-content">
						      <div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Successfully sent!</h5>
						        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
						      </div>
						      <div class="modal-body">
						        Your information has successfully been sent! Thank you.
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection