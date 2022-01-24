header = document.getElementById('site-header')
fixedNav = document.getElementById('fixed-nav')
mainNav = document.getElementById('main-nav')
formModal = document.getElementById('form-modal')

//navbar observer and switcher
let observer = new IntersectionObserver( (entries) => {
  entries.forEach(entry => {
    if(entry.isIntersecting) fixedNav.style.transform = 'translateY(-100%)'
    else fixedNav.style.transform = 'translateY(0%)'
  });
}, {
  root: null,
  rootMargin: '0px',
  threshold: 0.2
});
observer.observe(mainNav)

//view visitor register form
const visitorRegister = () =>{
  formModal.style.display = 'flex'
  formModal.firstElementChild.classList.add('slide-down')
}

//close button
const closeFormModal = () =>{
  formModal.style.display = 'none'
}

//to validate all form inputs before enabling submit button
form = formModal.querySelector('div form')
emailInput = form.querySelector('input[name="email"]')
nameInput = form.querySelector('input[name="name"]')
jobInput = form.querySelector('input[name="job"]')

countryInput = form.querySelector('input[name="nationality"]')
countryList = document.getElementById('country-list')
countryListItems = [...countryList.children]

//display country list and clear text
countryInput.addEventListener('focus', e=>{
  countryList.style.display = "block"
  countryInput.value = ''
})
// countryInput.addEventListener('focusout', e=>{
//   countryList.style.display = "none"
// })

//remove unmatching countries
countryInput.addEventListener('input', e=>{
  countryListItems.forEach(item =>{
    if(!item.innerText.includes(countryInput.value)) item.style.display = 'none';
    else item.style.display = 'list-item'
  })
  // emailInput.classList.add('validated')
});

//fill input on a country click
countryListItems.forEach(li => {
  li.addEventListener('click', (e)=>{
    countryInput.value = li.innerText
    countryList.style.display = "none"
  })
});

formModal.firstElementChild.addEventListener('click', e=>{

})

const formSubmit = () =>{
  // formModal.firstElementChild.style.animation = 'slide-up 0.5s forwards'
  formModal.firstElementChild.classList.remove('slide-down')
}

const expandCheckboxes =(e)=>{
  e.classList.toggle('open')
  e.nextElementSibling.classList.toggle('expand-checkboxes')
}

//handle outside clicking for country list and form window
formModal.addEventListener('click', e=>{
  if(countryList.style.display!="none" && !countryList.contains(e.target) && !countryInput.contains(e.target)) {
    countryList.style.display = "none"
  }
  if(!formModal.firstElementChild.contains(e.target)) closeFormModal()
})