<?php
namespace App\Repositories\User;

interface UserRepositoryInterface{
    public function register_new_user($request);
    public function login_user($request);
}