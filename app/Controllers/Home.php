<?php

namespace App\Controllers;

use App\Libraries\PasswordHasher;
use App\Models\LoginModel;

class Home extends BaseController
{

    protected $passwordHasher;
    protected $loginModel;

    public function __construct()
    {
        $this->passwordHasher = new PasswordHasher();
        $this->loginModel = new LoginModel();
    }

    public function index(): string
    {
        session()->setTempdata("home", "active", 2);
        session()->set("page", "Home");

        if ($this->request->getMethod() == "post") {
            $clauses = [
                "user_email" => $this->request->getVar("email", FILTER_SANITIZE_EMAIL),
                "user_passkey" => $this->request->getVar("password", FILTER_SANITIZE_STRING),
            ];

            $salt = $this->loginModel->getSalt([
                    "user_email" => $clauses['user_email']
            ]);

            if ($salt) {
                $clauses["user_passkey"] = $this->passwordHasher->
                hashPasswordWithSalt(
                    $clauses['user_passkey'],
                    "sha512",
                    false,
                    $salt->user_salt
                )[1];
                $authenticated = $this->loginModel->authenticateLogin($clauses);

                if ($authenticated) {
                    session()->set("user", $authenticated);
                } else {
                    session()->setTempdata(
                        "login_error",
                        "Credentials do not match, Please try again!",
                        3
                    );
                }
            }

        }

        return view('home');
    }

    public function test()
    {
        var_dump(
            $this->passwordHasher->hashPasswordWithSalt(
                "hello123",
                "sha512",
                false,
                "2we45"
            )
        );
    }

}
