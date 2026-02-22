function TenVaTuoi() {
    var Ten, Tuoi;
    Ten = prompt("Bạn hãy nhập vào tên ", "");
    Tuoi = prompt("Bạn hãy nhập vào Tuổi ",20);
    document.write("Chào bạn : <B>" + Ten + "</B>");
    document.write("<br>");
    document.write("Tuổi của bạn là : <U> " + Tuoi + "</U>");
}
TenVaTuoi();