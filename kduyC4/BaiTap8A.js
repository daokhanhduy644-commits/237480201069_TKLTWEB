function link(){
    var LuaChon;
    LuaChon = prompt("Bạn hãy nhập một số để mở trang web: ",1);
    switch(LuaChon)
    {
        case "1": window.open("http://blu.edu.vn"); break;
        case "2": window.open("http://ctu.edu.vn"); break;
        case "3": window.open("https://vndoc.com"); break;
        default : window.open("https://meta.vn");
    }
}
link();