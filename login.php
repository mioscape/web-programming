<?php
    require 'header.php';
?>
<div class="bg-secondary bg-opacity-25 col-lg-3 col-md-10 col-sm-10 col-10 col-xl-3 mx-auto rounded mt-5">
    <div class="card">
        <h5 class="card-header">
            Login
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
                    <button type="submit" class="btn btn-primary">Login</button>
                    <button type="button" class="btn btn-secondary" onclick="registerForm()">Register</button>
                </form>
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
<a data-bs-toggle="modal" data-bs-target="#ifMissingCredentialModal" id="alertMissingCredential"></a>
<div class="modal fade" data-bs-backdrop="static" data-bs-keyboard="false" id="ifMissingCredentialModal" tabindex="-1" aria-labelledby="ifMissingCredentialModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="ifMissingCredentialModalLabel">Alert</h1>
            </div>
            <div class="modal-body">
                Username or password is wrong.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    let username = document.getElementById("username");
    let password = document.getElementById("password");
    let storedUsername = localStorage.getItem("username");
    let storedPassword = localStorage.getItem("password");
    let logged = localStorage.getItem("logged");

    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    event.preventDefault()
                    login();
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()

    if (logged === 'true') {
        clickById("alertNotLogged");
    }

    function registerForm() {
        hrefDirect('register.php');
    }

    function ifLogged() {
        hrefDirect('index.php');
    }

    function login() {
        if (logged === 'true') {
            clickById("alertNotLogged");
        } else {
            if (username.value === storedUsername && password.value === storedPassword) {
                localStorage.setItem('logged', 'true');
                hrefDirect('index.php');
            } else {
                clickById("alertMissingCredential");
            }
        }
    }
</script>
