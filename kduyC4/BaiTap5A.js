function ThoiGian(){
    var D = new Date();
    document.title = "Bây giờ là: " + D.getHours() +" giờ" + D.getMinutes() +" phút.";
}
ThoiGian();