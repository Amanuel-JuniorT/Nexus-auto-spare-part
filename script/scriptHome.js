const catagories = document.querySelector('.catagories'),
  lists = document.querySelector('.catagory_lists'),
  items = lists.querySelectorAll('li'),
  currentItem = catagories.querySelector('p');


  

catagories.addEventListener('click', ()=>{
  lists.classList.toggle('active');
});

items.forEach(item =>{
  item.addEventListener('click', ()=>{
    currentItem.innerText = item.innerText;
  })
})

let count = 0;
// if(count == 0){
//   dis_prev.style.display = "none";
// }
//  else if(count == 1){
//   dis_next.style.display = "none";
//  }

 dis_prev.addEventListener('click',()=>{
  if(count !=0){
    discounts.style.translate = `${(count-1)*(-33.3)}% 0`;
    count--;
  }
  displayButton();
  console.log(count)
 })

 dis_next.addEventListener('click',()=>{
  if(count < 1){
    discounts.style.translate = `${(count+1)*(-33.3)}% 0`
    count++;
  }
  displayButton();
  console.log(count)
 })

 function displayButton(){
  if(count == 1){
    dis_next.style.display = "none";
    dis_prev.style.display = "flex";
    
  }
  else if(count == 0){
    dis_prev.style.display = "none";
    dis_next.style.display = "flex";
  }
  else{
    dis_prev.style.display = "flex";
    dis_next.style.display = "flex";
  }
 }