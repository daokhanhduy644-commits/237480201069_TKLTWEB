function TinhTuoi(){
    var D = new Date();
    var NamSinh, NamHienTai;
    NamHienTai = D.getFullYear();//Lưu năm hiện tại vào biến
    do{
        NamSinh = prompt("Bạn sinh năm bao nhiêu: ","");
    } while(parseInt(NamSinh) > NamHienTai);
    alert("Tuổi của bạn bây giờ là: " + (NamHienTai - NamSinh));
}
TinhTuoi();