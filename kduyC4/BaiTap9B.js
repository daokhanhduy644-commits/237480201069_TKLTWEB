function Computer() {
    var SoLuong, i;
    var DS = new Array();

    SoLuong = prompt("Bạn cần nhập bao nhiêu thiết bị: ", 5);

    for (i = 0; i < SoLuong; i++) {
        DS[i] = prompt("Nhập tên thiết bị: ", "");
    }

    // Hiển thị bảng
    document.write("<h1>Danh sách Computer</h1>");
    document.write("<table border='1' cellpadding='5'>");
    document.write("<tr><th>Computer</th></tr>");

    for (i = 0; i < DS.length; i++) {
        document.write("<tr><td>" + DS[i] + "</td></tr>");
    }

    document.write("</table>");
}

Computer();
