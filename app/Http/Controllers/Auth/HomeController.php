<?php

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class HomeController extends Controller{

    public function referral()
{
    return 'http://localhost:8000/?ref=' . \Hashids::encode(auth()->user()->id);
}
public function referrer()
{
    return auth()->user()->referrer;
}

public function referrals()
{
    return auth()->user()->referrals;
}
}
