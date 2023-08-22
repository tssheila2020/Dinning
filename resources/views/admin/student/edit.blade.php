@extends('layout.main')
@section('title', 'Edit Student')
@section('content')
<div class="container mt-5">
   <div class="row">
      <div class="col-lg-12">
         <div class="card">
            <div class="card-body">
               <div class="card-title">
                  <h3 class="text-center title-2">Edit Student</h3>
               </div>
               <hr>
               <form action="#" method="post">
                  @csrf
                  <div class="form-group">
                     <label for="name" class="control-label mb-1">Name</label>
                     <input id="name" name="name" type="text" class="form-control" aria-required="true" aria-invalid="false" value='name'>
                  </div>
                  <div class="form-group has-success">
                     <label for="email" class="control-label mb-1">Email</label>
                     <input id="email" name="email" type="email" class="form-control" data-val="true" data-val-required="Please enter a valid email address"
                        aria-required="true" aria-invalid="false" >
                  </div>
                  <div class="form-group">
                     <label for="password" class="control-label mb-1">Password</label>
                     <input id="password" name="password" type="password" class="form-control" value="" data-val="true">
                  </div>
                  <div>
                     <button id="submit" type="submit" class="btn btn-lg btn-info btn-block">
                     <span id="payment-button-amount">Submit</span>
                     <span id="payment-button-sending" style="display:none;">Sending…</span>
                     </button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection