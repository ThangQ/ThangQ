function changeClass(name) {
    let _alink = ["home", "a", "b"];
    let id = name + "-link";
    document.getElementById(id).classList.add("active");
    for (let i = 0; i < _alink.length; i++){
        if (_alink[i] !== name) {
            let id = _alink[i] + "-link";
            document.getElementById(id).classList.remove("active")
        }
       
    }
}

