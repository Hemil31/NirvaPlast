<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign In page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('images/favicon/site.webmanifest') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/loginadmin.css') }}">

</head>
<body>
    <div class="tile">
        <div class="tile-header">
            <h2
                style="color: white; opacity: .75; font-size: 4rem; display: flex; justify-content: center; align-items: center; height: 100%;">
                Admin</h2>
        </div>
        <div class="tile-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label class="form-input">
                    <i class="material-icons">email</i>
                    <input name="email" id="email" type="email"  required />
                    <span class="label">Email</span>
                    <span class="underline"></span>
                </label>

                <label class="form-input">
                    <i class="material-icons">lock</i>
                    <input name="password" id="password" type="password" required />
                    <span class="label">Password</span>
                    <div class="underline"></div>
                </label>

                <div class="submit-container clearfix" style="margin-top: 2rem;">
                    <div id="submit" role="button" type="button" class="btn btn-irenic float-right" tabindex="0">
                        <button type="submit" style="background: none; border: none; color: inherit; padding: 0; font: inherit; cursor: pointer;">
                            <span>SIGN IN</span>
                        </button>
                    </div>

                    <div class="login-pending">
                        <div class=spinner>
                            <span class="dot1"></span>
                            <span class="dot2"></span>
                        </div>

                        <div class="login-granted-content">
                            <i class="material-icons">done</i>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="./script.js"></script>
</body>
</html>
