<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>Register</title>

    <!-- Bootstrap Core and vandor -->
    @include('include.style')

</head>

<body class="font-opensans">

    <div class="auth">
        <div class="auth_left">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-5">
                        <a class="header-brand" href="index.html"><i class="fa fa-dashboard brand-logo"></i></a>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-danger">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card-title">Create new account</div>
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter email" value="{{ old('email') }}">
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password">
                            @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-footer">
                            <button type="submit" class="btn btn-primary btn-block">Create new account</button>
                        </div>
                </div>
                <div class="card-footer text-center text-muted">
                    Already have account? <a href="{{ route('register') }}">Sign up</a>
                </div>
                </form>
            </div>
        </div>
        <div class="auth_right">
            <div class="carousel slide" data-ride="carousel" data-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="assets/images/slider1.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Fully Responsive</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider2.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Quality Code and Easy Customizability</h4>
                            <p>There are many variations of passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="assets/images/slider3.svg" class="img-fluid" alt="login page" />
                        <div class="px-4 mt-4">
                            <h4>Cross Browser Compatibility</h4>
                            <p>Overview We're a group of women who want to learn JavaScript.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('include.script')
</body>

</html>
