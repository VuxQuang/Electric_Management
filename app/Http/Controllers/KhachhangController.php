<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KhachhangController extends Controller
{
    public function add_khachhang()
    {
        return view('mycomponent.khachhang');
    }

    //Danh sách khách hàng
    public function all_kh()
    {
        $all_kh = DB::table('khachhang')->get();
        return view('mycomponent.khachhang', ['khachhang' => $all_kh]);
    }

    //Thêm khách hàng
    public function store(Request $request)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'sdt' => 'required|min:10|max:11',
                    'makh' => 'required',
                    'tenkh' => 'required',
                    'diachi' => 'required',
                    'email' => 'required',
                    'cmnd' => 'required|min:12|max:12'
                ],
                [
                    'sdt.required' => 'Số điện thoại phải nhập',
                    'sdt.min' => 'Số điện thoại ít nhất 10 chữ!!!',
                    'sdt.max' => 'Số điện thoại tối đa 11 chữ',
                    'makh.required' => 'Mã KH  phải nhập',
                    'email.required' => 'Email  phải nhập',
                    'tenkh.required' => 'Tên KH phải nhập',
                    'diachi.required' => 'Địa chỉ  phải nhập',
                    'cmnd.required' => 'CMND phải nhập',
                    'cmnd.min' => 'CMND phải là 12 số',
                    'cmnd.max' => 'CMND phải là 12 số',
                ]
            );

            if ($validator->fails()) {
                $err = "";
                foreach ($validator->errors()->messages() as $key => $value) {
                    $err = $err . $value[0] . "<br/>";
                }
                return back()->with('message', $err ?? '');
            }

            $findCus = DB::table('khachhang')->where('makh', $request->makh)->first();
            if ($findCus) {
                return back()->with('message', 'Mã khách hàng không được trùng!');
            } else {
                DB::table('khachhang')->insert([
                    'makh' => $request->makh,
                    'tenkh' => $request->tenkh,
                    'diachi' => $request->diachi,
                    'dt' => $request->sdt,
                    'cmnd' => $request->cmnd,
                    'email' => $request->email,
                    'create_at' => now()->format('Y-m-d H:i:s'),
                    'create_by' => Auth::user()?->name,
                ]);
                return back()->with('message', 'Thêm khách hàng thành công!');
            }
        } catch (Exception $err) {
            return back()->with('message', 'Thêm khách hàng thất bại!' . $err);
        }
    }

    //Xóa khách hàng
    public function delete(Request $request)
    {
        try {
            $findCus = DB::table('dienke')->where('makh', $request->makh)->first();
            if ($findCus) {
                return back()->with('message', 'Không được xóa!!!');
            } else {
                \DB::table('khachhang')->where('makh', $request->makh)->delete();
                return redirect()->back()->with('message', 'Xoá khách hàng thành công!');
            }
        } catch (Exception $err) {
            return redirect()->back()->with('message', 'Xoá khách hàng không thành công!');
        }
    }

    //Sửa khách hàng
    public function edit($makh)
    {
        // $tim_kh = DB::table('khachhang')->find($makh);
        $kh = DB::table('khachhang')->where('makh', $makh)->first();
        $list_kh = DB::table('khachhang')->get();

        return view('mycomponent.update_khachhang', ['detail_kh' => $kh, 'khachhang' => $list_kh]);
    }

    public function update(Request $request, $id)
    {
        try {
            $validator = Validator::make(
                $request->all(),
                [
                    'sdt' => 'required|min:10|max:11',
                    'tenkh' => 'required',
                    'diachi' => 'required',
                    'email' => 'required',
                    'cmnd' => 'required|min:12|max:12'
                ],
                [
                    'sdt.required' => 'Số điện thoại phải nhập',
                    'sdt.min' => 'Số điện thoại ít nhất 10 chữ!!!',
                    'sdt.max' => 'Số điện thoại tối đa 11 chữ',
                    'tenkh.required' => 'Tên KH phải nhập',
                    'email.required' => 'Email phải nhập',
                    'diachi.required' => 'Địa chỉ  phải nhập',
                    'cmnd.required' => 'CMND phải nhập',
                    'cmnd.min' => 'CMND phải là 12 số',
                    'cmnd.max' => 'CMND phải là 12 số',
                ]
            );
            if ($validator->fails()) {
                $err = "";
                foreach ($validator->errors()->messages() as $key => $value) {
                    $err = $err . $value[0] . "<br/>";
                }
                return back()->with('message', $err);
            }
            DB::table('khachhang')->where('makh', $id)->update([
                'makh' => $request->makh,
                'tenkh' => $request->tenkh,
                'diachi' => $request->diachi,
                'dt' => $request->sdt,
                'cmnd' => $request->cmnd,
                'email' => $request->email,
                'update_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'update_by' => Auth::user()?->name,
            ]);
            return $this->all_kh();
            // return back()->with('message', 'Cập nhật khách hàng thành công!');

        } catch (Exception $err) {
            return back()->with('message', 'Cập nhật hàng thất bại!' . $err);
        }
    }


    public function updatett(Request $request)
    {
        DB::table('hoadon')
            ->where('mahd', $request->mahd)
            ->update([
                'tinhtrang' => 0,
            ]);
        $all_kh_no = DB::table('khachhang')
            ->join('dienke', 'khachhang.makh', '=', 'dienke.makh')
            ->join('hoadon', 'hoadon.madk', '=', 'dienke.madk')
            ->where('tinhtrang', 1)->get();

        return view('mycomponent.notien', ['kh_notien' => $all_kh_no]);
    }

    //DS khách hàng nợ
    public function all_kh_no()
    {
        try {
            $all_kh_no = DB::table('khachhang')->join('dienke', 'khachhang.makh', '=', 'dienke.makh')
                ->join('hoadon', 'hoadon.madk', '=', 'dienke.madk')->where('tinhtrang', 1)->get();
            return view('mycomponent.notien', ['kh_notien' => $all_kh_no]);
        } catch (Exception $err) {
            return back()->with('message', 'Không có khách hàng nợ!' . $err);
        }
    }
}
