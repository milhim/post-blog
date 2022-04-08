@extends('layouts.app')


@section('content')
    <div class="d-flex row  justify-content-center">

        <div class="col-lg-4 p-4 bg-white rounded">

            <form action="{{ route('register') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="name" class="">Name</label>
                    <input type="text" name="name" id="name" placeholder="Your name"
                        class="  form-control border-2 w-100 p-2 rounded @error('name') border-danger @enderror" value="{{old('name')}}">
                    @error('name')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label for="username" class="sr-only">Username</label>
                    <input type="text" name="username" id="username" placeholder="User name"
                        class=" form-control border-2 w-100 p-2 rounded @error('name') border-danger @enderror" value="{{old('username')}}">

                    @error('username')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="email" id="email" placeholder="Your email"
                        class=" form-control border-2 w-100 p-2 rounded @error('name') border-danger @enderror" value="{{old('email')}}">

                    @error('email')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" id="password" placeholder="Choose a password"
                        class=" form-control  border-2 w-100 p-2 rounded @error('name') border-danger @enderror" value="">

                    @error('password')
                        <div class="text-danger mt-2 text-sm">
                            {{ $message }}

                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password_confirmation" class="sr-only">Password again</label>
                    <input type="password" name="password_confirmation" id="password_confirmation"
                        placeholder="Repeat your password" class=" form-control border-2 w-100 p-2 rounded" value="">
                </div>

                <div>
                    <button type="submit" class="btn btn-primary px-3 py-2 fs-5 w-100">Register</button>
                </div>
            </form>
        </div>

    </div>
@endsection
