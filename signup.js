let sign_in=document.getElementById('signup');
let box_signup=document.getElementById('box-signup');
let box_signin=document.getElementById('box-signin');
let sign_up=document.getElementById('signin');
let box_feedback =document.getElementById('box-feedback');
// let FD_submit=document.getElementById('FD-submit');
let feedback=document.getElementById('feedback');
feedback.addEventListener('click',function(){
   box_signup.style.display="none";
   box_signin.style.display="none";
   box_feedback.style.display="block";
   console.log(1);

})
sign_up.addEventListener('click',function(){
   box_signup.style.display="none";
   box_feedback.style.display="none";
   box_signin.style.display="block";
   console.log(2);

})
sign_in.addEventListener('click',function(){
   box_signup.style.display="block";
   box_signin.style.display="none";
   box_feedback.style.display="none";
   console.log(3);

})
