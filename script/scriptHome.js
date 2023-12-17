const catagories = document.querySelector('.catagories'),
  lists = document.querySelector('.catagory_lists'),
  items = lists.querySelectorAll('li'),
  currentItem = catagories.querySelector('p'),
  login = document.querySelector('.login'),
  signup = document.querySelector('.signup');

  function logging(){
    
  }
catagories.addEventListener('click', ()=>{
  lists.classList.toggle('active');
});

items.forEach(item =>{
  item.addEventListener('click', ()=>{
    currentItem.innerText = item.innerText;
  })
})