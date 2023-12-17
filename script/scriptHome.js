const catagories = document.querySelector('.catagories'),
  lists = document.querySelector('.catagory_lists'),
  items = lists.querySelectorAll('li'),
  currentItem = catagories.querySelector('p'),
  login = document.querySelector('.login'),
  signup = document.querySelector('.signup'),
  register_bg = document.querySelector('.register_bg'),
  close_register = register_bg.querySelector('img');


  login.addEventListener('click', ()=>{
    register_bg.classList.add('active');
  })

  signup.addEventListener('click', ()=>{
    register_bg.classList.add('active');
  })

  close_register.addEventListener('click', ()=>{
    register_bg.classList.remove('active');
  })

  // function logging(){
  //   register_bg.classList.remove('active');
  //   register_bg.classList.add('active');
  // }
catagories.addEventListener('click', ()=>{
  lists.classList.toggle('active');
});

items.forEach(item =>{
  item.addEventListener('click', ()=>{
    currentItem.innerText = item.innerText;
  })
})