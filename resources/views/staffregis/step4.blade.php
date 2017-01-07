@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">2B-STAFF</h1>
    <div class="collection">
        <div class="collection-item">
            <h5 class="red-text text-accent-1 header">กรอกข้อมูลเพิ่มเติม !</h5>
            <blockquote>
                <p>น้องสามารถเลือกทำส่วนใดก่อนก็ได้</p>
                <p>หัวข้อที่ยังไม่สมบูรณ์จะเป็นสีแดง หัวข้อที่เสร็จสมบูรณ์แล้วจะเป็นสีเขียว</p>
            </blockquote>
            <div class="row">
                <div class="col s12 m6 l4">
                    <div class="card red accent-2">
                        <div class="card-content white-text center-align">
                            <i class="material-icons medium">assignment_ind</i>
                            <p>ข้อมูลสถานศึกษา</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card green accent-4">
                        <div class="card-content white-text center-align">
                            <i class="material-icons medium">assignment_ind</i>
                            <p>ข้อมูลสถานศึกษา</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card red accent-2">
                        <div class="card-content white-text center-align">
                            <i class="material-icons medium">assignment_ind</i>
                            <p>ข้อมูลสถานศึกษา</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card green accent-4">
                        <div class="card-content white-text center-align">
                            <i class="material-icons medium">assignment_ind</i>
                            <p>ข้อมูลสถานศึกษา</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card red accent-2">
                        <div class="card-content white-text center-align">
                            <i class="material-icons medium">assignment_ind</i>
                            <p>ข้อมูลสถานศึกษา</p>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card green accent-4">
                        <div class="card-content white-text center-align">
                            <i class="material-icons medium">assignment_ind</i>
                            <p>ข้อมูลสถานศึกษา</p>
                        </div>
                    </div>
                </div>
            </div>
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