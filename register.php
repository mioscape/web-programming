<?php
    require 'header.php';
?>

<div class="bg-secondary bg-opacity-25 col-3 mx-auto rounded mt-5">
    <div class="card">
        <h5 class="card-header">
            Register
        </h5>
        <div class="card-body">
            <div class="mx-auto">
                <form class="needs-validation" novalidate>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" required>
                        <div class="invalid-feedback">
                            Please choose a username.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" required>
                        <div class="invalid-feedback">
                            Please choose a password.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
        <a data-bs-toggle="modal" data-bs-target="#successRegisterModal" id="alertSuccessRegister"></a>
        <div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="successRegisterModal" tabindex="-1" aria-labelledby="successRegisterModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="successRegisterModalLabel">Alert</h1>
                    </div>
                    <div class="modal-body">
                        Register success.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="ifSuccessRegister()">Login</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a data-bs-toggle="modal" data-bs-target="#ifNotLoggedModal" id="alertNotLogged"></a>
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="ifNotLoggedModal" tabindex="-1" aria-labelledby="ifNotLoggedModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ifNotLoggedModalLabel">Alert</h1>
            </div>
            <div class="modal-body">
                You are already logged in.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="ifLogged()">Back to Home</button>
            </div>
        </div>
    </div>
</div>
<script>
    let logged = localStorage.getItem('logged');
    let username = document.getElementById("username");
    let password = document.getElementById("password");

    (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    event.preventDefault()
                    register();
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

    function ifLogged() {
        hrefDirect("index.php");
    }

    if (logged === 'true') {
        clickById("alertNotLogged");
    }

    function ifSuccessRegister() {
        hrefDirect("login.php");
    }

    function register() {
        localStorage.setItem("username", username.value);
        localStorage.setItem("password", password.value);
        clickById("alertSuccessRegister");
    }
</script>