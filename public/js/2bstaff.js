function redirectWithPost(url,name,value,token) {
    $.redirect(url, {name: value,'_token': token});
}

function checkAccept (token) {
    swal({
            title: "แน่ใจหรือไม่ ?",
            text: "เข้ามาแล้ว ต้องทำตามให้ได้นะ",
            type: "info",
            showCancelButton: true,
            confirmButtonColor: "#26a69a",
            confirmButtonText: "สบายบรื๋อ",
            cancelButtonText: "อ่านใหม่ดีกว่า",
            closeOnConfirm: true
        },
        function () {
            window.location = '/register';
        }
    );
}

$('.preventForm').submit(function(e) {
    e.preventDefault()
    const tempThis = this
    $.post($(this).data('url'), $(this).serialize())
    .done(function (data) {
        $(tempThis).modal('close')
        if($(tempThis).data('mode') == 1) changeClassComplete ('#schoolInfoCard',1)
        else if($(tempThis).data('mode') == 2) changeClassComplete ('#homeInfoCard',2)
        else if($(tempThis).data('mode') == 3) changeClassComplete ('#parentInfoCard',3)
        else if($(tempThis).data('mode') == 4) changeClassComplete ('#a2bInfoCard',4)
    })
    .fail(function (data) {
        console.log(data)
    })
})

function changeClassComplete (id,mode) {
    $.post('/api/iscomplete', {
        '_token': $("meta[name='csrf-token']").attr('content'),
        'mode': mode
    })
    .done(function (data) {
        if (data.status)
        {
            $(id).removeClass('red accent-2') 
            $(id).addClass('green accent-4') 
        } else { 
            $(id).addClass('red accent-2')
            $(id).removeClass('green accent-4') 
        }
    })
    .fail(function () {

    })
}