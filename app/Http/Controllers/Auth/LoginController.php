<?php
class LoginController extends Controller
{
    protected $redirectTo = '/home';
    
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
