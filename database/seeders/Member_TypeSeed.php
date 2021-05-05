<?php

namespace Database\Seeders;

use App\Models\Committee;
use App\Models\Member;
use App\Models\MemberType;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Member_TypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MemberType::create(['name' => 'المدير']);
        MemberType::create(['name' => 'الرئيس']);
        MemberType::create(['name' => 'عضو اللجنة']);
        MemberType::create(['name' => 'الرئيس الشرفي']);
        MemberType::create(['name' => 'نائب المدير']);
        MemberType::create(['name' => 'رئيس لجنة العلاقات العامة']);
        MemberType::create(['name' => 'رئيس اللجنة الفنية']);
        MemberType::create(['name' => 'رئيس لجنة الإعلام']);
        MemberType::create(['name' => 'رئيس اللجنة المالية']);
        MemberType::create(['name' => 'رئيس لجنة الضيافة و المرافقات']);
        MemberType::create(['name' => 'رئيس لجنة التنظيم']);
        MemberType::create(['name' => 'منسق الفريق الميداني في الطينطان']);

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'email_verified_at'=>Carbon::now(),
            'password'=>Hash::make('admin1234')
        ]);}
}
