function TinhTien(){
    var sl = parseFloat(document.getElementById("SoLuong").value) || 0;
    var dg = parseFloat(document.getElementById("DonGia").value) || 0;
    document.getElementById("ThanhTien").value = sl * dg;
}
TinhTien();