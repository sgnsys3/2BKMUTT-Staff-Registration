function checkAccept () {
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
            window.alert("OK")
        }
    );
}