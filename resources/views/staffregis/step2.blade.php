@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">2B-STAFF</h1>
    <div class="collection">
        <div class="collection-item">
            <h5 class="red-text text-accent-1">ข้อมูลส่วนตัว</h5>
            <form action="">
                <div class="row">
                    <div class="input-field col s12 m5">
                        <input id="first_name" type="text" class="validate" required>
                        <label for="first_name">ชื่อจริง</label>
                    </div>
                    <div class="input-field col s12 m5">
                        <input id="last_name" type="text" class="validate" required>
                        <label for="last_name">นามสกุล</label>
                    </div>
                    <div class="input-field col s12 m2">
                        <input id="nick_name" type="text" class="validate" required>
                        <label for="nick_name">ชื่อเล่น</label>
                    </div>
                    <div class="input-field col s6 m4">
                        <input id="birthday" type="date" class="datepicker" required>
                        <label for="birthday">วันเกิด</label>
                    </div>
                    <div class="input-field col s6 m4">
                        <select required>
                            <option value="">กรุณาเลือกเพศ</option>
                            <option value="1">ชาย</option>
                            <option value="2">หญิง</option>
                        </select>
                    </div>
                    <div class="input-field col s12 m4">
                        <input id="religion" type="text" class="validate" required>
                        <label for="religion">ศาสนา</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="disase" type="text" class="validate">
                        <label for="disase">โรคประจำตัว</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="allergies" type="text" class="validate">
                        <label for="allergies">สิ่งที่แพ้</label>
                    </div>
                    <div class="input-field col s12">
                        <input id="drug" type="text" class="validate">
                        <label for="drug">ยา / การรักษาเบื้องต้น</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="telephone" type="text" class="validate" required>
                        <label for="telephone">เบอร์โทรศัพท์มือถือ</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input id="email" type="email" class="validate" required>
                        <label for="email">อีเมลล์</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 center-align">
                        <button class="btn waves-effect waves-light" type="submit" name="action">ขั้นตอนถัดไป
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