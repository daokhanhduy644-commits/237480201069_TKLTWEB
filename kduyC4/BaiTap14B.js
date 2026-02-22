function Tinh() {
    var a = parseFloat(document.getElementsByName("SoHang1")[0].value) || 0;
    var b = parseFloat(document.getElementsByName("SoHang2")[0].value) || 0;
    var kq = 0;

    var pt = document.getElementsByName("PhepTinh");

    if (pt[0].checked) kq = a + b;
    if (pt[1].checked) kq = a - b;
    if (pt[2].checked) kq = a * b;
    if (pt[3].checked) kq = a / b;

    document.getElementsByName("KetQua")[0].value = kq;
}
Tinh();