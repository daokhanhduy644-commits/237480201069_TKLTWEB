function TinhLuong() {
    var namHienTai = new Date().getFullYear();

    var namVaoLam = parseInt(document.getElementsByName("NamVaoLam")[0].value || 0);
    var heSo = parseFloat(document.getElementsByName("HeSo")[0].value || 0);
    var luongCoSo = parseFloat(document.getElementsByName("LuongCoSo")[0].value || 0);

    var luongCoBan = heSo * luongCoSo;
    var phuCap = luongCoBan * 0.25;
    var thamNien = namHienTai - namVaoLam;
    if (thamNien < 0) thamNien = 0;

    var thanhTien = luongCoBan + phuCap;

    document.getElementsByName("LuongCoBan")[0].value = luongCoBan;
    document.getElementsByName("PhuCap")[0].value = phuCap;
    document.getElementsByName("ThamNien")[0].value = thamNien;
    document.getElementsByName("ThanhTien")[0].value = thanhTien;
}
TinhLuong();