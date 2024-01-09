

//js for sidebar menu toggle btn
$(document).ready(function(){
$(".sidebarbtn").click(function(){
	$(".sidebar").toggleClass("active");
	$(".sidebarbtn").toggleClass("toggle");
});
});//end js for sidebar menu toggle btn




/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - 
This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("actives");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}