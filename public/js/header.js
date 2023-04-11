const setAddingCart=document.querySelector(".setAddingCart")
document.addEventListener("click",(e)=>{
   const setAddingCart=e.target.closest(".setAddingCart")
   if(setAddingCart){
       // console.log(setAddingCart.closest(".product-cart"))
       cartArea.classList.toggle("active")
   }
})

/// 
const cartArea=document.querySelector(".cart-area")
const cartH=document.querySelector(".cart-header")
const cartF=document.querySelector(".cart-sumary")
const cartList_SB=document.querySelector(".cart-sideBar .cart-list")
console.log(cartList_SB)

const carH_height=cartH.offsetHeight;
const carF_height=cartF.offsetHeight;

//set chiều cao cho thanh thanh list giỏ hàng
cartList_SB.style.height=`calc(100% - ${carH_height + carF_height +20}px)`;
//thực hiện chức năng hiển thị
const cartClose=document.querySelector(".cart-close")
const cartOpen=document.querySelector(".cart-open")


cartClose.onclick=()=>{
   cartArea.classList.toggle("active")
}
cartOpen.onclick=()=>{
   cartArea.classList.toggle("active")
}
function openCart() {
   cartArea.classList.toggle("active")
}