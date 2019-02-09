<?php include'header.php'
?>
	
<!-- <?php 
require_once 'slider.php'
 ?>	 -->













	<!-- <div class="container">


		<div class="row">
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<h1>ui learning</h1>
				<img src="assets/img/1.jpg" class="img-fluid rounded">
				<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<button class="btn-defult">Read more..</button>
			</div>
		<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<h1>ui learning</h1>
				<img src="assets/img/2.jpg" class="img-fluid rounded">
				<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<button class="btn-defult">learn more..</button>
		</div>
			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 col-xl-4">
				<h1>ui learning</h1>
				<img src="assets/img/3.jpg" class="img-fluid rounded">
				<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<button class="btn-defult">download</button>
			
			</div>
		</div>
	
	</div> -->


<label id="email-label">email</label>
<br>
<input class="from-control test" type="test" name="text" id="email" value="" placeholder="insert Email adress">
<span class="email-error" style="display:none; color:red">email is requird</span>
<br>
<label id="email-label">pasword</label>
<br>
<input class="from-control test" type="test" name="text" id="password" value="">
<br>
<span class="password-error" style="display:none; color: red">password is requird</span>

<br>
<button class="btn btn-primary submit" id="test3">submit</button>







<?php require_once('footer.php');
?>

<script type="text/javascript">
	// var result;
	// var a = 10, b = 20, c = 8;
	// result=a+b+c;


	// console.log(result);
	// document.write(result);

// var fname='zahid'
// var lname='ali'

// var name = `${fname} \n ${lname}`;
// console.log (name);
// var marks = 26;
// 



// var i=10;
// while (i>=1){

// 	console.log(i);
// 	i--

// }

// var i=0;
// while (i<=10){
// if(i % 2 ==1)
// 	console.log(i);
// 	i++

// }





// function add (a=10,b=20){

	
// 	var sum = a+b;
// 	console.log(sum);
// }
// // add();


// function sub(a,b ){

	
// 	var sub = a-b;
// 	console.log(sub);
// }
// // sub();


// function mul(a,b ){


// 	var mul = a*b;
// 	console.log(mul);
// }
// // mul();


// function div(a,b ){

	
// 	var div = a/b;
// 	console.log(div);
// }
// // div();

// var option = 'sum'
// switch (option){
// 	case 'add':
// 	add(10,20);
// 	break;

// 	case 'sub':
// 	sub(10,20);
// 	break;

// 	case 'div':
// 	div(10,20);
// 	break;

// 	case 'mul':
// 	mul(10,20);
// 	break;
// 	default:
// 	console.log("invalid input");

// }

// if (marks > 91) {
	// console.log("pass")
// }else{

	// console.log("fail")
// }

// var fruits = ['apple','banana','orange','mosambi']
// console.log(fruits[2])


// var fruits = ['apple','banana','orange','mosambi']
// console.log(fruits.length)

// var fruits = ['apple','banana','orange','mosambi','mosambi']
// console.log(fruits.length-1)
// // console.log(fruits[0])
// for ( var i = 0; i < fruits.length; i++){
// 	fruits[i]
// 	console.log(fruits[i]);
// }

// $(document).ready(function(){
// $('.submit').click(function(){
// var valve = $('.test').attr('id');
// 	console.log(valve)
// })

// })


// $(document).ready(function(){
//  		$('.submit').click(function(){
// 	var value = $('.test').attr('name1','test2');
// 	// Remove an attribute
// 	  $('.test').removeAttr('id');
// 	console.log(value);
	// });
   //  });
 	
$(document).ready(function(){
 		$('.submit').click(function(){
		 // $('#test3').text('submited');
		var email = $('#email').val();
			var password = $('#password').val();
			if (email.length <  1) {
				$('.email-error').show(1000);
			}else {
				$('.email-error').hide(1000);
			} 

			if (password.length < 1){
				$('.password-error').show(1000);
			}else {
				$('.password-error').hide(1000);
			}

});
 	});



</script>
</body>

</html> 