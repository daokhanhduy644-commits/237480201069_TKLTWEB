function TinhTuoi(){
    var D = new Date();
    var NamSinh, NamHienTai;
    NamHienTai = D.getFullYear();//Lưu năm hiện tại vào biến
    NamSinh = prompt("Bạn sinh năm bao nhiêu ? : ","");
    alert("Tuổi của bạn bây giờ là: " + (NamHienTai - NamSinh));
}
TinhTuoi();