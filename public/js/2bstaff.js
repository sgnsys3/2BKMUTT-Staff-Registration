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
    })
    .fail(function (data) {
        console.log(data)
    })
})