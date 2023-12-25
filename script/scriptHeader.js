const login = document.querySelector('.login'),
signup = document.querySelector('.signup'),
loginPage = document.querySelector('.login_page'),
signupPage = document.querySelector('.signup_page'),
register_bg = document.querySelector('.register_bg'),
close_register = register_bg.querySelector('img'),
toLogin = document.querySelector('.switch-to-login'),
toSignup = document.querySelector('.switch-to-signup'),
dis_prev = document.querySelector('.dis-prev'),
dis_next = document.querySelector('.dis-next'),
discounts = document.querySelector('.discount_collection'),
all_parts = document.querySelector('.all-parts'),
parts = all_parts.querySelectorAll('li'),
search = document.querySelector('.search')
;

window.addEventListener('click', ()=>{
  all_parts.classList.remove('active');
})

login.addEventListener('click', ()=>{
  register_bg.classList.add('active');
  loginPage.classList.add('active');
})

signup.addEventListener('click', ()=>{
  register_bg.classList.add('active');
  signupPage.classList.add('active');
})

close_register.addEventListener('click', ()=>{
  register_bg.classList.remove('active');
  loginPage.classList.remove('active');
  signupPage.classList.remove('active');
})

toLogin.addEventListener('click', ()=>{
  signupPage.classList.remove('active');
  loginPage.classList.add('active');
})

toSignup.addEventListener('click', ()=>{
  loginPage.classList.remove('active'); 
  signupPage.classList.add('active');
})

search.addEventListener('click', ()=>{
  // if(!all_parts.classList.contains('active')){
  //   all_parts.classList.add('active');
  // }
})
// search.addEventListener('keyup', e =>{
//   parts.forEach(part =>{
//     if(part.textContent.toLowerCase().includes(e.target.value.toLowerCase())){
//       part.style.display = "block";
//     } else{
//       part.style.display = "none";
//     }
//     if(!all_parts.classList.contains('active')){
//       all_parts.classList.add('active');
//     }
//     if(e.key == "Escape"){
//       all_parts.classList.remove('active');
//       search.blur()
//     }
    
//   })
// })


const arr = {
  catagory: ['Car Parts', 'Oils and Fluids', 'Accessories and Equipments'],
  item: ['Spark Plug', 'Break']
}

search.addEventListener('keyup', e =>{
  all_parts.innerHTML = '';
  arr.catagory.forEach(cat => render(cat, e))
  arr.item.forEach(it =>render(it, e))
  
  if(search.value === ''){
    all_parts.innerHTML = '';
  }
  if(!all_parts.classList.contains('active')){
    all_parts.classList.add('active');
  }
  if(all_parts.innerHTML==''){
    all_parts.classList.remove('active');
  } 
  if(e.key == "Escape"){
    all_parts.classList.remove('active');
    search.blur()
  }
})

function render(given, e){
  if(given.toLowerCase().includes(e.target.value.toLowerCase())){
    let itemLists = document.createElement('li');
    itemLists.innerText = given;
    all_parts.append(itemLists);
  }
  
}