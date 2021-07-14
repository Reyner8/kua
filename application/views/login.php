<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <title>Login</title>
    <link href="<?= base_url('assets/css/styles.css'); ?>" rel="stylesheet" />
    <link href="<?= base_url('assets/css/custom.css'); ?>" rel="stylesheet" />
    <script crossorigin="anonymous" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js">
    </script>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header login-header">
                                    <h3 class="text-center font-weight-light my-4">
                                        Admin
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('auth/login'); ?>" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" name="username" placeholder="Username" type="text" />
                                            <label for="username">
                                                Username
                                            </label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" name="password" placeholder="Password" type="password" />
                                            <label for="inputPassword">
                                                Password
                                            </label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <button class="btn btn-primary">
                                                Login
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            Copyright © Your Website 2021
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script crossorigin="anonymous" src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>
    <script src="<?= base_url('assets/js/scripts.js'); ?>">
    </script>
</body>

</html>