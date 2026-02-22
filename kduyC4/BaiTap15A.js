function CapNhat(){
    document.title = document.getElementsByName("TieuDe")[0].value;
    document.bgColor = document.getElementsByName("MauNen")[0].value;
    document.fgColor = document.getElementsByName("MauChu")[0].value;
    window.defaultStatus = document.getElementsByName("TrangThai")[0].value;
}
CapNhat();