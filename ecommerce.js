 const 
 close=document.querySelector(".close"); 
 const 
 open=document.querySelector(".ham"); 
 const
  menu=document.querySelector(".menu")  
 close.addEventListener("click",()=>{ 
 menu.style.visibility="hidden"; }) 
 open.addEventListener("click",()=>{ 
 menu.style.visibility="visible"; })

 function addToCart() {
    // Perform actions when the button is clicked
    // For example, you can add the product to the cart or show a confirmation message
    alert("Product added to cart!");
  }
