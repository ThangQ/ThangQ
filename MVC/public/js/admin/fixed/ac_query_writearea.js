let btn_zoom_out = document.getElementById("btn_zoom_out");
let btn_zoom_in = document.getElementById("btn_zoom_in");
let btn_del = document.getElementById("btn_del");
let btn_copy = document.getElementById("btn_copy");
let btn_paste = document.getElementById("btn_paste");
let btn_submit = document.getElementById("btn_submit");
let toolbar = document.getElementById("toolbar");
let query = document.getElementById("query");
let write_query_ctn = document.getElementById("write_query_ctn");
let _a = [btn_del, btn_copy, btn_paste, btn_submit];

btn_zoom_out.style.display = "none";
for (let i = 0; i < _a.length; i++){
    _a[i].style.display = "none";
}

query.onkeyup = () => {
    const keyword = /(SELECT|TABLE)/g;
    if (keyword.test(query.value))
        query.style.color = "red";
}
btn_copy.onclick = () => {
    let copy_text = query;
    copy_text.select();
    copy_text.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copy_text.value);
}

btn_paste.onclick = () => {
    navigator.clipboard.readText()
        .then(clipText => {
            query.value += clipText;
        });
}
btn_del.onclick = () => query.value = "";

btn_zoom_out.onclick = function() {
    write_query_ctn.style.bottom = " -39.5vh ";
    btn_zoom_out.style.display = "none";
    btn_zoom_in.style.display = "block";
    toolbar.style.top = "-7vh";
    for (let i = 0; i < _a.length; i++){
        _a[i].style.display = "none";
    }
}

btn_zoom_in.onclick = function() {
    write_query_ctn.style.bottom = "0";
    btn_zoom_out.style.display = "block";
    btn_zoom_in.style.display = "none";
    toolbar.style.top = "-3vh";
    for (let i = 0; i < _a.length; i++){
        _a[i].style.display = "block";
    }
}