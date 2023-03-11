let top_bottom_btn=document.getElementById('top-bottom-btn');
top_bottom_btn.addEventListener('click',function(){
    // window.scrollTo(0,0);
    window.scrollTo({
        top:0,
        left:0,
        behavior:"smooth"
    })
});
document.addEventListener('scroll',()=>{
    if(document.documentElement.scrollTop<=100){
        top_bottom_btn.style.display='none';
    }
    else{
        top_bottom_btn.style.display='block';
    }
});