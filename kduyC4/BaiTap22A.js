function ChenSo(so){
    document.getElementById("ketqua").value += so;
}

function Tinh(){
    var bieuThuc = document.getElementById("ketqua").value;
    document.getElementById("ketqua").value = eval(bieuThuc);
}

function Xoa(){
    document.getElementById("ketqua").value = "";
}