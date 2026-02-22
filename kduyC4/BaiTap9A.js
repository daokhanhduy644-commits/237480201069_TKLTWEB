function SapXep(){
    var SoLuong, x;
    var DS = new Array(100);
    SoLuong = prompt("Bạn cần nhập bao nhiêu người: ",5);
    for(i = 0 ; i < SoLuong ; i++) {
        DS[i] = prompt("Nhập vào họ tên: ","");
    }
    DS.sort();
    document.write("<h1> Danh sách đã sắp xếp là: </h1>");
    for(x in DS){
        document.write(DS[x]);
        document.write("<br>");
    }
}
SapXep();