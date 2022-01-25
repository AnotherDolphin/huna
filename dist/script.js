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

//assign inputs
form = formModal.querySelector('div form')
emailInput = form.querySelector('input[name="email"]')
nameInput = form.querySelector('input[name="name"]')
phoneInput = form.querySelector('input[name="phone"]')
whatsappInput = form.querySelector('input[name="whatsapp"]')
jobInput = form.querySelector('input[name="job"]')

countryInput = form.querySelector('input[name="nationality"]')
countryList = document.getElementById('country-list')
countryListItems = [...countryList.children]

//TEXT INPUT (name and job)

const textValidator = (e) =>{
  if(e.target.value.length>2) e.target.classList.add('verified')
  else e.target.classList.remove('verified')
}
nameInput.addEventListener('input', textValidator)
jobInput.addEventListener('input', textValidator)


//EMAIL INPUT

emailInput.addEventListener('input', ()=>{
  if(/\w+([\.-]?\w+)*@\w+(\.\w+)+/.test(emailInput.value)) emailInput.classList.add('verified')
  else emailInput.classList.remove('verified')
})

//COUNTRY INPUT

//display country list and clear text
countryInput.addEventListener('focus', e=>{
  countryList.style.display = "block"
  countryInput.value = ''
  countryInput.classList.remove('verified')
})

//remove unmatching countries during typing
countryListValues = countryListItems.map(e => e.innerText)
countryInput.addEventListener('input', e=>{
  countryListItems.forEach(item =>{
    if(!item.innerText.includes(countryInput.value)) item.style.display = 'none';
    else item.style.display = 'list-item'
  })
  //verify country
  if(countryListValues.includes(countryInput.value)) countryInput.classList.add('verified')
  else countryInput.classList.remove('verified')
});

//fill input and verify on country click
countryListItems.forEach(li => {
  li.addEventListener('click', (e)=>{
    countryInput.value = li.innerText
    countryInput.classList.add('verified')
    countryList.style.display = "none"
  })
});

//PHONE INPUTS

const phoneNumberValidator = (e) =>{
  if(/^\+?\d{9,15}$/.test(e.target.value)) e.target.classList.add('verified')
  else e.target.classList.remove('verified')
}
phoneInput.addEventListener('input', phoneNumberValidator)
whatsappInput.addEventListener('input', phoneNumberValidator)

//CHECKBOX LISTS

const verifyCheckboxList = (x)=>{
  let count = [...x.nextElementSibling.querySelectorAll('input')].filter(i => i.checked).length
  let currentCount = x.firstElementChild.innerHTML
  if(count>0) {
    x.classList.add('verified')
    console.log(currentCount);
    x.firstElementChild.innerHTML = currentCount.replace(/(?<=\().*(?=\))/, count)
    x.firstElementChild.style.visibility = 'visible'
  }
  else {
    x.classList.remove('verified')
    x.firstElementChild.style.visibility = 'hidden'
  }
}

const expandCheckboxes =(x)=>{
  x.classList.toggle('expand-checkbox')
  if(x.classList.contains('expand-checkbox')) return
  verifyCheckboxList(x)
}

//handle outside clicking for country list, checkbox lists, and form window
formModal.addEventListener('click', e=>{
  //country list trigger
  if(countryList.style.display!="none" && !countryList.contains(e.target) && !countryInput.contains(e.target)) {
    countryList.style.display = "none"
  }
  //checkbox lists trigger
  [...formModal.querySelectorAll('.expand-checkbox')].forEach(i=>{
    if(!i.nextElementSibling.contains(e.target) && !i.contains(e.target)) i.classList.toggle('expand-checkbox')
    if(!i.classList.contains('expand-checkbox')) verifyCheckboxList(i)
  })
  // form trigger
  if(!formModal.firstElementChild.contains(e.target)) closeFormModal()
  checkFormStatus()
})

const checkFormStatus = () =>{
  if(formModal.querySelectorAll('.verified').length==8) formModal.querySelector('[type="submit"]').disabled = false
  else formModal.querySelector('[type="submit"]').disabled = true
}

formModal.addEventListener('input', checkFormStatus)
formModal.addEventListener('change', checkFormStatus)

const formSubmit = () =>{
  // formModal.firstElementChild.style.animation = 'slide-up 0.5s forwards'
  formModal.firstElementChild.classList.remove('slide-down')
}