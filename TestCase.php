<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class KhachhangControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        // Create a user and authenticate for tests
        $user = User::factory()->create();
        $this->actingAs($user);
    }

    public function test_can_view_add_khachhang_page()
    {
        $response = $this->get(route('add_khachhang'));
        $response->assertStatus(200);
        $response->assertViewIs('mycomponent.khachhang');
    }

    public function test_can_list_all_khachhang()
    {
        DB::table('khachhang')->insert([
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'diachi' => 'Address 1',
            'dt' => '0123456789',
            'cmnd' => '123456789012',
            'email' => 'customer1@example.com',
        ]);

        $response = $this->get(route('all_kh'));
        $response->assertStatus(200);
        $response->assertViewIs('mycomponent.khachhang');
        $response->assertSee('Customer One');
    }

    public function test_can_store_khachhang()
    {
        $response = $this->post(route('store_kh'), [
            'sdt' => '0123456789',
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'diachi' => 'Address 1',
            'email' => 'customer1@example.com',
            'cmnd' => '123456789012'
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('message', 'Thêm khách hàng thành công!');

        $this->assertDatabaseHas('khachhang', [
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'email' => 'customer1@example.com',
        ]);
    }

    public function test_cannot_store_duplicate_khachhang()
    {
        DB::table('khachhang')->insert([
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'diachi' => 'Address 1',
            'dt' => '0123456789',
            'cmnd' => '123456789012',
            'email' => 'customer1@example.com',
        ]);

        $response = $this->post(route('store_kh'), [
            'sdt' => '0123456789',
            'makh' => 'KH01',
            'tenkh' => 'Customer Two',
            'diachi' => 'Address 2',
            'email' => 'customer2@example.com',
            'cmnd' => '123456789012'
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('message', 'Mã khách hàng không được trùng!');
    }

    public function test_can_update_khachhang()
    {
        DB::table('khachhang')->insert([
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'diachi' => 'Address 1',
            'dt' => '0123456789',
            'cmnd' => '123456789012',
            'email' => 'customer1@example.com',
        ]);

        $response = $this->put(route('update_kh', 'KH01'), [
            'sdt' => '0987654321',
            'tenkh' => 'Customer One Updated',
            'diachi' => 'Address 1 Updated',
            'email' => 'customer1updated@example.com',
            'cmnd' => '123456789012'
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('message', 'Cập nhật khách hàng thành công!');

        $this->assertDatabaseHas('khachhang', [
            'makh' => 'KH01',
            'tenkh' => 'Customer One Updated',
            'dt' => '0987654321',
        ]);
    }

    public function test_can_delete_khachhang()
    {
        DB::table('khachhang')->insert([
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'diachi' => 'Address 1',
            'dt' => '0123456789',
            'cmnd' => '123456789012',
            'email' => 'customer1@example.com',
        ]);

        $response = $this->delete(route('delete_kh'), ['makh' => 'KH01']);
        $response->assertRedirect();
        $response->assertSessionHas('message', 'Xoá khách hàng thành công!');

        $this->assertDatabaseMissing('khachhang', ['makh' => 'KH01']);
    }

    public function test_cannot_delete_khachhang_with_dienke()
    {
        DB::table('khachhang')->insert([
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'diachi' => 'Address 1',
            'dt' => '0123456789',
            'cmnd' => '123456789012',
            'email' => 'customer1@example.com',
        ]);

        DB::table('dienke')->insert([
            'madk' => 'DK01',
            'makh' => 'KH01',
            'ngaysx' => now(),
            'ngaylap' => now(),
        ]);

        $response = $this->delete(route('delete_kh'), ['makh' => 'KH01']);
        $response->assertRedirect();
        $response->assertSessionHas('message', 'Không được xóa!!!');

        $this->assertDatabaseHas('khachhang', ['makh' => 'KH01']);
    }

    public function test_can_list_all_kh_no()
    {
        DB::table('khachhang')->insert([
            'makh' => 'KH01',
            'tenkh' => 'Customer One',
            'diachi' => 'Address 1',
            'dt' => '0123456789',
            'cmnd' => '123456789012',
            'email' => 'customer1@example.com',
        ]);

        DB::table('dienke')->insert([
            'madk' => 'DK01',
            'makh' => 'KH01',
            'ngaysx' => now(),
            'ngaylap' => now(),
        ]);

        DB::table('hoadon')->insert([
            'mahd' => 'HD01',
            'madk' => 'DK01',
            'tinhtrang' => 1,
        ]);

        $response = $this->get(route('all_kh_no'));
        $response->assertStatus(200);
        $response->assertViewIs('mycomponent.notien');
        $response->assertSee('Customer One');
    }

    public function test_can_update_hoadon_status()
    {
        DB::table('hoadon')->insert([
            'mahd' => 'HD01',
            'madk' => 'DK01',
            'tinhtrang' => 1,
        ]);

        $response = $this->post(route('updatett'), ['mahd' => 'HD01']);
        $response->assertRedirect();

        $this->assertDatabaseHas('hoadon', [
            'mahd' => 'HD01',
            'tinhtrang' => 0,
        ]);
    }
}
