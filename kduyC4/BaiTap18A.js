function KiemTra(){
    var nd = document.getElementsByName("NoiDung")[0];
    var skt = document.getElementsByName("SoKyTu")[0];

    if(nd.value.length > 200){
        alert("Bạn đã gõ quá số ký tự cho phép!");
    }

    skt.value = nd.value.length;
}
KiemTra();