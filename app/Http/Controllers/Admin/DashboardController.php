<?php
namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class DashboardController extends Controller
{
    public function index()
    {
        $totalins = User::Where('role_id',2)->count();
        return view('admin.dashboard',compact('totalins'));
    }
}
