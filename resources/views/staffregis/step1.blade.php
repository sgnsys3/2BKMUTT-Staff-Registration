@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">2B-STAFF</h1>
    <div class="collection">
        <div class="collection-item">
            <center>
                <h5><u>ข้อตกลงในการสมัคร</u></h5>
                <p><b>โครงการอบรมและพัฒนาศักยภาพพี่เลี้ยงโครงการ 2B-KMUTT ครั้งที่ 9</b></p>
            </center>
            <u>คำชี้แจงโปรดอ่านก่อนที่จะทำการสมัครในขั้นตอนถัดไป</u><br>
            <blockquote>
                <p>พี่เลี้ยงจะปฏิบัติตามกฎของค่าย และทางมหาวิทยาลัยอย่างเคร่งครัด</p>
                <p>พี่เลี้ยงจะต้องพักในหอพักของมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรีตลอดระยะเวลาของโครงการและไม่สามารถพักที่อื่นได้แม้ว่าที่พักจะอยู่ใกล้มหาวิทยาลัยก็ตาม</p>
                <p>พี่เลี้ยงจะต้องไม่ปฏิบัติกิจกรรมอื่นใดที่ซ้ำซ้อนกับระยะเวลาของค่าย</p>
                <p>พี่เลี้ยงจะทำงานตามที่ได้รับมอบหมายอย่างเต็มความสามารถ</p>
                <p>พี่เลี้ยงจะต้องไม่ทะเลาะวิวาทกันในระยะเวลาการดำเนินกิจกรรม</p>
                <p>พี่เลี้ยงจะไม่ยุ่งเกี่ยวกับสุรา ยาเสพติด การพนัน และอบายมุขทั้งหลายตลอดระยะเวลาการดำเนินกิจกรรม</p>
                <p>พี่เลี้ยงจะต้องสามารถเข้าร่วมกิจกรรมต่อไปนี้ได้ตลอดโครงการ
                <blockquote>
                    <p>โครงการอบรมและพัฒนาศักยภาพพี่เลี้ยง ครั้งที่ 9 ระหว่างวันที่ 5 - 7 มีนาคม 2560</p>
                    <p>โครงการ 2B-KMUTT รุ่นที่ 14 ระหว่างวันที่ 11 มีนาคม – 7 เมษายน 2560</p>
                </blockquote>
                </p>
            </blockquote>
            <p>หมายเหตุ : เพื่อเตรียมความพร้อมสำหรับการเปิดโครงการ 2B-KMUTT ครั้งที่ 14 ในวันที่ 11 มีนาคม 2560<br>
            ทางมหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี ได้จัดที่พักระหว่างวันที่ 8 – 10 มีนาคม 2560 ให้กับพี่เลี้ยงโครงการทุกท่าน </p>
            <center><p class="red-text"><b><u>พี่เลี้ยงที่ทำผิดกฎของค่าย และพิสูจน์ได้ว่าผิดจริงจะต้องออกจากการเป็นพี่เลี้ยงทันที</u></b></p>
            <div class="btn waves-effect waves-light" onClick="checkAccept(document.getElementsByName('csrf-token')[0].content)">ยอมรับข้อตกลง
                <i class="material-icons right">send</i>
            </div>
            </center><br>
        </div>
    </div>
</div>
@endsection

@section('extendScript')
<script>
</script>
@endsection