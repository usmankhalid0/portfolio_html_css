<?php include('header.php') ?>
<div class="accordion12">
    <h1 class="heading1">My Projects</h1>
<button class="accordion"><b>PHP Projects</b></button>
<div class="panel">
  <h4 class="heading-project">Geo Location project</h4>
  <p class="p-tag" >In Gep Location ,a user enter pick-up and destination point then By using Google API it calculate the total distance between them </p>
  <h4 class="heading-project">Hotel Mangement project</h4>
  <p class="p-tag" >In this project ,Staff check rooms are empty or not if rooms are not empty staff gives the time and date of user when room are empty </p>
  <h4 class="heading-project">School Mangement project</h4>
  <p class="p-tag" >In this project ,There are three panals first is for students ,second is for teachers and last is for admin.students is used for attendences.</p>
  <p class="p-tag" >teachers is used to maintain the records of students (attendence and marks).</p>
</div>

<button class="accordion">laravel Projects</button>
<div class="panel">
<h4 class="heading-project">Car Service Project</h4>
  <p class="p-tag" >It is the mutli authentication project. Thay are use used by 3 type of user in this project. One is customer second is CarShop Vendor and last is for admin.Car Shop vendor gives different types of services for their customers.
After admin approve service then Vendor offer to their customer. In this project there is one to one and one to many chat companent exist.This project cantain two type of payment method one is on-line(Strip) and other cash after service. </p>
<h4 class="heading-project">Ecommerces Shop Mangement Project</h4>
<p class="p-tag" >In Ecommerces Shop Mangement Project, Vendor Sell their products through online,Notify their customers when any new item is added,vendor offer promaotion to some specify items 
  .vendor gives gift vouchers to their regualar customers.vendor gives two payment options one is strip and other is jazz-cash.
</p>
</div>

<button class="accordion">Laravel + Vue-js Projects</button>
<div class="panel">
<h4 class="heading-project">Crud</h4>
  <p class="p-tag" >Fetch rest api from Laravel and display on Vue js website.</p>
  <h4 class="heading-project">Online CarService Shop</h4>
  <p class="p-tag" >Make laravel rest api and frantEnd in Vue js. Still going </p>
</div>
</div>
<script>
var acc = document.getElementsByClassName("accordion");
console.log(acc);
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>
</body>
</html>