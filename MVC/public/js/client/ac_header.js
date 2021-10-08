function changeHeaderStyle() {
    let header = document.querySelector("header");
    this.scrollY < 250 ? header.style.backgroundColor = "rgba(0,0,0,0)": header.style.backgroundColor = "rgba(255,255,255,0.85)";
}
window.addEventListener("scroll", changeHeaderStyle , false);