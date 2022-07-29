<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Validation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1>Create User</h1>

        {{-- @php
            var_dump($errors);
        @endphp --}}

        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div><!-- /.alert alert-danger -->
        @endif --}}

        <form action="/users/create" method="POST">

            @csrf {{-- Cross site Request Forgery --}}

            <div class="mb-3">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control {{ $errors->has('first_name') ? 'is-invalid' : '' }}"
                    name="first_name" value="{{ old('first_name') }}">
                @if ($errors->has('first_name'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('first_name') }}</strong>
                    </div>
                @endif
            </div>

            <div class="mb-3">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : '' }}"
                    name="last_name" value="{{ old('last_name') }}">

                @if ($errors->has('last_name'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('last_name') }}</strong>
                    </div>
                @endif
            </div>

            <div class=" mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                    name="email" value="{{ old('email') }}">

                @if ($errors->has('email'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </div>
                @endif
            </div>

            <div class=" mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                    name="phone" value="{{ old('phone') }}">

                @if ($errors->has('phone'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </div>
                @endif
            </div>

            <div class=" mb-3">
                <label for="date_of_birth" class="form-label">Date of Birth</label>
                <input type="date" class="form-control {{ $errors->has('date_of_birth') ? 'is-invalid' : '' }}"
                    name="date_of_birth" value="{{ old('date_of_birth') }}">

                @if ($errors->has('date_of_birth'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('date_of_birth') }}</strong>
                    </div>
                @endif
            </div>

            <div class=" mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                    name="password">

                @if ($errors->has('password'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </div>
                @endif
            </div>

            <div class=" mb-3">
                <label for="password_confirmation" class="form-label">Confirm Password</label>
                <input type="password"
                    class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                    name="password_confirmation">

                @if ($errors->has('password_confirmation'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </div>
                @endif
            </div>

            <div class=" mb-3">
                <label for="user_name" class="form-label">User Name *</label>
                <input type="text" class="form-control {{ $errors->has('user_name') ? 'is-invalid' : '' }}"
                    name="user_name" value="{{ old('user_name') }}">

                @if ($errors->has('user_name'))
                    <div class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('user_name') }}</strong>
                    </div>
                @endif

            </div>


            {{-- <hr>

    <h2>Profile Information</h2>

    <div class=" mb-3">
        <label for="profile_pic" class="form-label">Profile Picture</label>
        <input type="text" class="form-control" name="profile_pic">
      </div>

      <div class="mb-3">
        <label for="bio" class="form-label">Profile Bio</label>
        <input type="text" class="form-control" name="bio">
      </div>

      <div class="mb-3">
        <label for="address" class="form-label">Address</label>
        <input type="text" class="form-control" name="address">
      </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>

    </div><!-- /.container -->

    </form>

</body>

</html>
