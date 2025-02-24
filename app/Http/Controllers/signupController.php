<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\signupRequest;
use Illuminate\Support\Facades\Session;

class signupController extends Controller
{
    /**
     * Hiển thị form đăng ký
     */
    public function index()
    {
        return view('signup'); // Gọi view hiển thị form
    }

    /**
     * Xử lý request sau khi submit form
     */
    public function displayInfor(Request $request)
    {
        // Kiểm tra dữ liệu nhập vào
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'date' => 'required|date',
            'phone' => 'required',
            'web' => 'required|url',
            'address' => 'required',
        ], [
            'name.required' => 'Họ tên không được để trống.',
            'age.required' => 'Tuổi không được để trống.',
            'age.numeric' => 'Tuổi phải là số.',
            'date.required' => 'Ngày sinh không được để trống.',
            'date.date' => 'Ngày sinh phải đúng định dạng.',
            'phone.required' => 'Điện thoại không được để trống.',
            'web.required' => 'Website không được để trống.',
            'web.url' => 'Website phải đúng định dạng URL.',
            'address.required' => 'Địa chỉ không được để trống.',
        ]);

        // Lấy danh sách người dùng từ session (nếu có)
        $users = Session::get('users', []);

        // Thêm người dùng mới vào mảng
        $users[] = $request->all();

        // Lưu mảng vào session
        Session::put('users', $users);

        return view('signup', ['users' => $users]);
    }
}
