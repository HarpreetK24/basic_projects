<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
            font-size: 1rem;
            line-height: 2.15;
            padding-left: .75em;
            padding-right: .75em;
        }

        .card-registration .select-arrow {
            top: 13px;
        }
    </style>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <div class="card card-registration my-4">
                        <div class="row g-0">
                            <div class="col-xl-6 d-none d-xl-block">
                                <img src="images/img4.webp"
                                    alt="Sample photo" class="img-fluid"
                                    style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />
                            </div>
                            <div class="col-xl-6">
                                <div class="card-body p-md-5 text-black">
                                    <h3 class="mb-5 text-uppercase">Teacher registration form</h3>
                                    <form action="teacheregister.php" method="post">
                                        <div class="row">
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1m"
                                                        class="form-control form-control-lg" name="fname" required>
                                                    <label class="form-label" for="form3Example1m">First name</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input type="text" id="form3Example1n"
                                                        class="form-control form-control-lg" name="lname" required>
                                                    <label class="form-label" for="form3Example1n">Last name</label>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example99" class="form-control form-control-lg"
                                            name="special" required>
                                            <label class="form-label" for="form3Example99">Specilizations</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example97" class="form-control form-control-lg"
                                            name="email" required>
                                            <label class="form-label" for="form3Example97">Email ID</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="form3Example97" class="form-control form-control-lg"
                                            name="phone" required>
                                            <label class="form-label" for="form3Example97">Phone no.</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example97"
                                                class="form-control form-control-lg" name="pass1" required>
                                            <label class="form-label" for="form3Example97">password</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example97"
                                                class="form-control form-control-lg" name="pass2" required>
                                            <label class="form-label" for="form3Example97">Re-Enter Password</label>
                                        </div>

                                        <div class="d-flex justify-content-end pt-3">
                                            <input type="submit" class="btn btn-warning btn-lg ms-2" value="Register">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>