<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width">
    <title></title>
    <style></style>
</head>

<body>
    <div class="tbl-hd">
        <table cellspacing="0">
            <tbody>
                @php
                    $dateTime = new DateTime($data['customer']->created_at);
                    $formattedDate = $dateTime->format('Y-m-d H:i:s');
                @endphp
                <caption>HÓA ĐƠN TIỀN ĐIỆN</caption>
                <tr>
                    <td colspan="3">Ngày: {{ $formattedDate }}</td>
                    <td colspan="3">Mã hóa đơn: {{ $data['order']['mahd'] }}</td>
                </tr>
                <tr>
                    <td colspan="6">Khách hàng: {{ $data['customer']->tenkh }}</td>
                </tr>
                <tr>
                    <td colspan="6">Email: {{ $data['customer']->email }}</td>
                </tr>
                <tr>
                    <td colspan="6">Địa chỉ: {{ $data['customer']->diachi }}</td>
                </tr>
                <tr>
                    <td colspan="6">Số điện thoại: {{ $data['customer']->dt }}</td>
                </tr>
                <tr class="row-txt">
                    <td class="col-txt">Mã hóa đơn</td>
                    <td class="col-txt">Mã điện kế</td>
                    <td class="col-txt">Kỳ</td>
                    <td class="col-txt">Từ ngày</td>
                    <td class="col-txt">Đến ngày</td>
                    <td class="col-txt">Chỉ số đầu</td>
                    <td class="col-txt">Chỉ số cuối</td>
                    <td class="col-txt">Thành tiền</td>
                </tr>

                <tr>
                    <td class="col-infor">{{ $data['order']['mahd'] }}</td>
                    <td class="col-infor">{{ $data['order']['madk'] }}</td>
                    <td class="col-infor">{{ $data['order']['ky'] }}</td>
                    <td class="col-infor">{{ $data['order']['tungay'] }}</td>
                    <td class="col-infor">{{ $data['order']['denngay'] }}</td>
                    <td class="col-infor">{{ $data['order']['chisodau'] }}</td>
                    <td class="col-infor">{{ $data['order']['chisocuoi'] }}</td>
                    <td class="col-infor">{{ number_format($data['order']['tongthanhtien'] ?? 0, 0, '', ',')}} VND</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
