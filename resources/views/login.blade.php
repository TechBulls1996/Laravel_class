@extends('layouts/main_template')

@section('main_page')
<section class="container-fluid bg-gray p-5">
    <div class="row">
        <div class="col-6">
             <h3 class="mb-3"> Login Form</h3>
            
             @if(session()->has('errors'))
               @foreach(session('errors')->all() as $key => $val )
                    <p class="text-danger"> <?= $val ?> </p>
               @endforeach
             @endif  
            <form action="<?= route('login_submit') ?>" method="post">
              @csrf
              <div class="row">
                <div class="col mb-3">
                    <input type="email" name="email" placeholder="Enter Email Address" class="form-control" value="<?= old('email') ?>">
                    @if(session('errors'))
                       <p class="text-danger"><?= session('errors')->first('email') ?></p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?= old('password') ?>">
                    @if(session('errors'))
                       <p class="text-danger"><?= session('errors')->first('password') ?></p>
                    @endif
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