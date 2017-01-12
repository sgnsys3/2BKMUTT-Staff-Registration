@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">2B-STAFF</h1>
    <div class="collection">
        <div class="collection-item">
            <h5 class="red-text text-accent-1">ข้อมูลส่วนตัว</h5>
            <form method="post">
                <div class="row">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="input-field col s12 m5">
                        <input name="name" id="name" type="text" class="validate" value="{{ old('name') }}" required>
                        <label for="name">ชื่อจริง</label>
                    </div>
                    <div class="input-field col s12 m5">
                        <input name="lastname" id="lastname" type="text" class="validate" value="{{ old('lastname') }}" required>
                        <label for="lastname">นามสกุล</label>
                    </div>
                    <div class="input-field col s12 m2">
                        <input name="nickname" id="nickname" type="text" class="validate" value="{{ old('nickname') }}" required>
                        <label for="nickname">ชื่อเล่น</label>
                    </div>
                    <div class="input-field col s6 m4">
                        <input name="dob" id="dob" type="date" class="datepicker" value="{{ old('dob') }}" required>
                        <label for="dob">วันเกิด</label>
                    </div>
                    <div class="input-field col s6 m4">
                        <select required name="gender">
                            <option value="">กรุณาเลือกเพศ</option>
                            <option value="1" @if(old('gender') == '1') selected @endif>ชาย</option>
                            <option value="2" @if(old('gender') == '2') selected @endif>หญิง</option>
                        </select>
                    </div>
                    <div class="input-field col s12 m4">
                        <input name="religion" id="religion" type="text" class="validate" value="{{ old('religion') }}" required>
                        <label for="religion">ศาสนา</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="disase" id="disase" type="text" class="validate" value="{{ old('disase') }}">
                        <label for="disase">โรคประจำตัว</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="allergies" id="allergies" type="text" class="validate" value="{{ old('allergies') }}">
                        <label for="allergies">สิ่งที่แพ้</label>
                    </div>
                    <div class="input-field col s12">
                        <input name="drug" id="drug" type="text" class="validate" value="{{ old('drug') }}">
                        <label for="drug">ยา / การรักษาเบื้องต้น</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input name="telephone" id="telephone" type="text" class="validate" required value="{{ old('telephone') }}">
                        <label for="telephone">เบอร์โทรศัพท์มือถือ</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input name="emailUser" id="email" type="email" class="validate" value="{{ old('emailUser') }}" required>
                        <label for="email">อีเมลล์</label>
                    </div>
                </div>
                <h5 class="red-text text-accent-1">ข้อมูลผู้ใช้งาน</h5>
                <div class="row">
                    <div class="col l12 m12 s12">
                        <blockquote class="valign">
                            <p>ตั้งรหัสเพื่อใช้ในการเข้าสู่ระบบ ในการแก้ไขคำถาม และกรอกข้อมูลเพิ่มเติมในภายหลัง</p>
                            <p>รหัสผ่าน 6 หลักขึ้นไป</p>
                            @if ($errors->has('email'))
                                <p class="red-text">ชื่อผู้ใช้งานถูกใช้งานแล้ว</p>
                            @endif
                            @if ($errors->has('password'))
                                <p class="red-text">รหัสผ่านไม่ถึง 6 หลัก</p>
                            @endif
                        </blockquote>
                    </div>
                    <div class="col l12 m12 s12">
                        <div class="input-field col s12">
                            <input name="email" id="username" type="text" class="validate" required>
                            <label for="username">ชื่อผู้ใช้</label>
                        </div>
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password" class="validate" required>
                            <label for="password">รหัสผ่าน</label>
                        </div>
                        <div class="input-field col s12">
                            <input name="password_confirmation" id="password_confirmation" type="password" class="validate" required>
                            <label for="password_confirmation">ยืนยันรหัสผ่าน</label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">ถัดไป
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('extendScript')
<script>
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 40, // Creates a dropdown of 15 years to control year
        format: 'yyyy-mm-dd'
    });
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
@endsection