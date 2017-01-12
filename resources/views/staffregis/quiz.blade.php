@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="header">2B-STAFF</h1>
    <div class="collection">
        <div class="collection-item">
            <h5 class="red-text text-accent-1">คำถาาาามมมมมมมม ~~</h5>
            <blockquote>
                <p>น้องสามารถเลือกทำข้อใดก่อนก็ได้</p>
                <p>เมื่อตอบครบทุกข้อแล้ว จะสามารถกดปุ่มส่งข้อมูลได้</p>
                <p>ข้อใดที่ตอบ และกดบันทึกแล้ว ระบบจะยังเก็บข้อมูลไว้</p>
            </blockquote>
            <div class="row">
                <div class="col m10 offset-m1 s12">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li>
                            <a class="collapsible-header black-text" href="#q1">
                                <span class="badge red-text">ยังไม่ตอบ</span>
                                <i class="material-icons red-text">info_outline</i>
                                คำถามข้อที่ 1
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q2">
                                <span class="badge green-text">ตอบแล้ว</span>
                                <i class="material-icons green-text">done</i>
                                คำถามข้อที่ 2
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q3">
                                <span class="badge red-text">ยังไม่ตอบ</span>
                                <i class="material-icons red-text">info_outline</i>
                                คำถามข้อที่ 3
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q4">
                                <span class="badge green-text">ตอบแล้ว</span>
                                <i class="material-icons green-text">done</i>
                                คำถามข้อที่ 4
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q5">
                                <span class="badge red-text">ยังไม่ตอบ</span>
                                <i class="material-icons red-text">info_outline</i>
                                คำถามข้อที่ 5
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q6">
                                <span class="badge green-text">ตอบแล้ว</span>
                                <i class="material-icons green-text">done</i>
                                คำถามข้อที่ 6
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q7">
                                <span class="badge red-text">ยังไม่ตอบ</span>
                                <i class="material-icons red-text">info_outline</i>
                                คำถามข้อที่ 7
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q8">
                                <span class="badge green-text">ตอบแล้ว</span>
                                <i class="material-icons green-text">done</i>
                                คำถามข้อที่ 8
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q9">
                                <span class="badge red-text">ยังไม่ตอบ</span>
                                <i class="material-icons red-text">info_outline</i>
                                คำถามข้อที่ 9
                            </a>
                        </li>
                        <li>
                            <a class="collapsible-header black-text" href="#q10">
                                <span class="badge green-text">ตอบแล้ว</span>
                                <i class="material-icons green-text">done</i>
                                คำถามข้อที่ 10
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col s12 center-align">
                    <div class="waves-effect waves-light btn grey">
                        <i class="material-icons left">settings_backup_restore</i>
                        ย้อนกลับ
                    </div>
                    <div class="waves-effect waves-green btn green accent-4">
                        <i class="material-icons right">send</i>
                        ส่งข้อมูล
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="q1" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 1</h4>
        <blockquote>คิดว่า “พี่เลี้ยง” คืออะไร และถ้าเปรียบเทียบเป็นสิ่งๆหนึ่งจะเปรียบเทียบกับอะไร</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q1answer" class="materialize-textarea"></textarea>
                <label for="q1answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q2" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 2</h4>
        <blockquote>คิดว่า “น้องค่าย” คืออะไร และถ้าเปรียบเทียบเป็นสิ่งๆหนึ่งจะเปรียบเทียบกับอะไร</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q2answer" class="materialize-textarea"></textarea>
                <label for="q2answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q3" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 3</h4>
        <blockquote>ถ้าน้องในฐานะที่เป็นพี่ค่าย มีธุระที่จะต้องกลับบ้านในวันกิจกรรม หรือในสัปดาห์ที่น้องค่ายพรีเซนต์งาน น้องจะแก้ไขปัญหานี้อย่างไร</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q3answer" class="materialize-textarea"></textarea>
                <label for="q3answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q4" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 4</h4>
        <blockquote>หากน้องได้รับมอบหมายให้ทำหน้าที่หนึ่ง แต่ขณะที่กำลังทำหน้าที่อยู่ มีพี่ เพื่อน หรือ คนอื่นในค่ายให้น้องไปช่วยทำงาน น้องจะทำอย่างไรกับสถานการณ์นี้</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q4answer" class="materialize-textarea"></textarea>
                <label for="q4answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q5" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 5</h4>
        <blockquote>ถ้ามีพี่ เพื่อน หรือน้องค่ายที่น้องไม่ชอบในระหว่างอยู่ค่ายน้องจะทำอย่างไร</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q1answer" class="materialize-textarea"></textarea>
                <label for="q1answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q6" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 6</h4>
        <blockquote>ถ้าน้องเจอน้องค่ายที่ไม่ให้ความร่วมมือในการทำกิจกรรม น้องจะแก้ไขปัญหานี้อย่างไร</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q1answer" class="materialize-textarea"></textarea>
                <label for="q1answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q7" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 7</h4>
        <blockquote>ถ้าในปีที่น้องจัดค่ายอยู่ในช่วงวาระไว้ทุกข์ ไม่สามารถจัดกิจกรรมรื่นเริงได้ เช่น 
การสันทนาการ การตีกลอง และกิจกรรมที่ส่งเสียงดัง เป็นต้น น้องจะจัดกิจกรรมอะไรที่สร้างความสนุกสนานและมีความประทับใจ แทนกิจกรรมดังกล่าว เพราะอะไร
</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q1answer" class="materialize-textarea"></textarea>
                <label for="q1answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q8" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 8</h4>
        <blockquote>ถ้าน้องค่ายหายไประหว่างทำกิจกรรม ควรทำอย่างไรกับสถานการณ์นี้ และถ้าไม่อยากให้เกิดสถานการณ์แบบนี้ควรวางแผนจัดการยังไง</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q1answer" class="materialize-textarea"></textarea>
                <label for="q1answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q9" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 9</h4>
        <blockquote>ถ้าพูดถึงคำว่า “เดิน นั่ง ยก เต้น” น้องจะคิดถึงอะไร และคิดว่าท่าทางใดเหมาะสมกับน้องมากที่สุด</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q1answer" class="materialize-textarea"></textarea>
                <label for="q1answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>

<div id="q10" class="modal">
    <div class="modal-content">
        <h4 class="red-text text-accent-1">คำถามข้อที่ 10</h4>
        <blockquote>ให้น้องบรรยายสิ่งที่คิดว่าแสดงความเป็นตัวตนของน้องได้มากที่สุด (อย่างน้อย 5 บรรทัด)</blockquote>
        <div class="row">
            <div class="input-field col s12">
                <textarea id="q1answer" class="materialize-textarea"></textarea>
                <label for="q1answer">ตอบ</label>
            </div>
        </div>
        <div class="row">
            <div class="col s12 right-align">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn green accent-4">
                    <i class="material-icons right">send</i>
                    บันทึก
                </a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extendScript')
<script>
  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });
</script>
@endsection