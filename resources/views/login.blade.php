@extends('layouts/main_template')

@section('main_page')
<section class="container-fluid bg-gray p-5">
    <div class="row">
        <div class="col-6">
             <h3 class="mb-3"> Login Form</h3>
             @if(session()->has('login_status'))
                @if(session()->get('login_status')==='true')
                    <p class="text-success"> Login Success</p>
                @else
                <p class="text-danger"> Your Login Email or Password didn't match</p>
                @endif
             @endif   

            <form action="<?= route('login_submit') ?>" method="post">
              @csrf
              <div class="row">
                <div class="col mb-3">
                    <input type="email" name="email" placeholder="Enter Email Address" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <input type="submit" value="login" class="btn btn-info">
                </div>
            </div>
            </form>
        </div>

    </div>
   
</section>

@endsection