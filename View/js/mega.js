const test = document.querySelectorAll(".test");
const mega = document.querySelectorAll(".mega");

for (let i = 0; i < test.length; i++) {
  test[i].addEventListener("click", () => {
    mega[i].style.display = "flex";
    test[i].innerHTML = "See Less";
  });
}
