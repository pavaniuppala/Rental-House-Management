const chooseFile = document.getElementById("cfile");
const imgPreview = document.getElementById("img-preview");

chooseFile.addEventListener("change", function () {
    getImg();
});
function getImg() {
    const files = chooseFile.files[0];
    if (files) {
        const fileReader = new FileReader();
        fileReader.readAsDataURL(files);
        fileReader.addEventListener("load", function () {
            imgPreview.style.display = "block";
            imgPreview.innerHTML = '<img src="' + this.result + '" />';
        });
    }
}
// var row = document.querySelector(".row")[0];
