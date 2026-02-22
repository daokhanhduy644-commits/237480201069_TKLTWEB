function ThoiGian(){
    var D = new Date();
    var ngay = D.getDate();
    var thang = D.getMonth() + 1;// vì getMonth chỉ lấy (0 - 11) nên cộng 1
    var nam = D.getFullYear();

    document.getElementById("ngaythangnam").innerHTML ="Hôm nay là: " + ngay + "/" + thang + "/" + nam;
}
ThoiGian();