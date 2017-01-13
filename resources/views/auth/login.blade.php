@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">2B-STAFF</h1>
    <div class="collection">
        <div class="collection-item">
            <h5 class="red-text text-accent-1">เข้าสู่ระบบ</h5>
            <form method="post" action="{{ url('/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                    <div class="col l12 m12 s12">
                        <blockquote class="valign">
                            <p>กรอกชื่อผู้ใช้งาน และรหัสผ่าน เพื่อเข้าสู่ระบบสมัครต่อไป</p>
                            @if ($errors->has('email'))
                                <p class="red-text">ข้อมูลไม่ถูกต้อง</p>
                            @endif
                        </blockquote>
                    </div>
                    <div class="col l12 m12 s12">
                        <div class="input-field col s12">
                            <input name="username" id="username" type="text" class="validate" required>
                            <label for="username">ชื่อผู้ใช้</label>
                        </div>
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password" class="validate" required>
                            <label for="password">รหัสผ่าน</label>
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

