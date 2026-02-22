function Tinh() {
    var a = parseFloat(document.getElementsByName("So01")[0].value);
    var b = parseFloat(document.getElementsByName("So02")[0].value);
    var kq = 0;

    var phepTinh = document.getElementsByName("Phep");

    if (phepTinh[0].checked) {        // Cộng
        kq = a + b;
    }
    else if (phepTinh[1].checked) {   // Trừ
        kq = a - b;
    }
    else if (phepTinh[2].checked) {   // Nhân
        kq = a * b;
    }
    else if (phepTinh[3].checked) {   // Chia
        if (b == 0) {
            alert("Không chia được cho 0");
            return;
        }
        kq = a / b;
    }

    document.getElementsByName("Ketqua")[0].value = kq;
}