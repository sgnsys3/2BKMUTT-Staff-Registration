@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">2B-STAFF</h1>
    <div class="collection">
        <div class="collection-item">
            <h5 class="red-text text-accent-1">ข้อมูลการเข้าสู่ระบบ</h5>
            <blockquote>
                <p>ตั้งรหัสเพื่อใช้ในการเข้าสู่ระบบ ในการแก้ไขคำถาม และกรอกข้อมูลเพิ่มเติมในภายหลัง โดยชื่อผู้ใช้จะเป็น เบอร์โทรศัพท์ของน้อง</p>
            </blockquote>
            <form action="">
                <div class="row">
                    <div class="input-field col s12 m6">
                        <input id="telephone" type="text" class="validate" required>
                        <label for="telephone">ชื่อผู้ใช้(เบอร์โทรศัพท์มือถือ)</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="password" type="password" class="validate" required>
                        <label for="password">รหัสผ่าน</label>
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
        selectYears: 40 // Creates a dropdown of 15 years to control year
    });
    $(document).ready(function() {
        $('select').material_select();
    });
</script>
@endsection