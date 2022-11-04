@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration w-100 m-auto">
      <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
      <form>
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-bottom" id="name" placeholder="Name">
          <label for="name"></label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="username">
          <label for="username"></label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="email"></label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="password"></label>
        </div>

        <button class="w-100 btn btn-lg btn-primary " type="submit">Register</button>
      </form>
      <small class="d-block text-center mt-3">Allready registered? <a href="login">Login</a></small>
    </main>

  </div>
</div>
@endsection