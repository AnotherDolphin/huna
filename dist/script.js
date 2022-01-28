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
areasInput = document.getElementById('interest_area-checklist')
estatesInput = document.getElementById('estate_type-checklist')

countryInput = form.querySelector('input[name="nationality"]')
countryList = document.getElementById('country-list')
countryListItems = [...countryList.children]

//TEXT INPUT (name and job)
const verifyText = (el, reviseTip = false) =>{
  if(el.value.length>3) el.classList.add('verified')
  else el.classList.remove('verified')
  if(reviseTip && el.classList.contains('verified')) el.nextElementSibling.style.display = 'none'
}

nameInput.addEventListener('input', e => verifyText(e.target, true))
jobInput.addEventListener('input', e => verifyText(e.target))

nameInput.addEventListener('focusout', e => {
  verifyText(e.target)
  if(e.target.value == nu) return
  if(!e.target.classList.contains('verified')) e.target.nextElementSibling.style.display = 'initial'
})

//EMAIL INPUT
const verifyEmail = ()=>{
  if(/^\w+([\.-]?\w+)*@\w+(\.\w+)+$/.test(emailInput.value)) emailInput.classList.add('verified')
  else emailInput.classList.remove('verified')
}
emailInput.addEventListener('input', verifyEmail)
emailInput.addEventListener('focusout', e =>{
  verifyEmail()
  if(emailInput.value == nu) return
  if(!emailInput.classList.contains('verified')) emailInput.nextElementSibling.style.display = 'initial'
})

//COUNTRY INPUT
const verifyCountry= (reviseTip = false) =>{
  //verify country
  if(countryListValues.includes(countryInput.value)) countryInput.classList.add('verified')
  else countryInput.classList.remove('verified')
  if (!reviseTip) return
  if(countryInput.value == nu | countryInput.value == '') {
    console.log(countryInput.nextElementSibling.style.display);
    countryInput.nextElementSibling.style.display = 'none'
    return
  }
  if(countryInput.classList.contains('verified')) countryInput.nextElementSibling.style.display = 'none'
  else countryInput.nextElementSibling.style.display = 'block'
}
//display country list and clear text
countryInput.addEventListener('focus', e=>{
  countryList.style.display = "block"
  countryInput.value = ''
  countryInput.classList.remove('verified')
  countryListItems.forEach(item => item.style.display = 'list-item')
})

//remove unmatching countries during typing
countryListValues = countryListItems.map(e => e.innerText)
countryInput.addEventListener('input', e=>{
  countryListItems.forEach(item =>{
    if(!item.innerText.includes(countryInput.value)) item.style.display = 'none';
    else item.style.display = 'list-item'
  })
  verifyCountry()
});

//fill input and verify on country click
countryListItems.forEach(li => {
  li.addEventListener('click', (e)=>{
    countryInput.value = li.innerText
    verifyCountry(true)
    countryList.style.display = "none"
  })
});

//verify on focus out
countryInput.addEventListener('focusout', () =>{
  verifyCountry(true)
})

//PHONE INPUTS
const verifyPhone = (el, reviseTip = false) =>{
  if(/^\+?\d{9,15}$/.test(el.value)) el.classList.add('verified')
  else el.classList.remove('verified')
  if(!reviseTip) return
  if(el.value == nu) {
    el.nextElementSibling.style.display = 'none'
    return
  }
  if(el.classList.contains('verified')) el.nextElementSibling.style.display = 'none'
  else el.nextElementSibling.style.display = 'block'
}
phoneInput.addEventListener('input', (e)=> verifyPhone(e.target))
whatsappInput.addEventListener('input', (e)=> verifyPhone(e.target))
phoneInput.addEventListener('focusout', (e)=> verifyPhone(e.target, true))
whatsappInput.addEventListener('focusout', (e)=> verifyPhone(e.target, true))

//CHECKBOX LISTS
const verifyCheckboxList = (x)=>{
  let count = [...x.nextElementSibling.nextElementSibling.querySelectorAll('input')].filter(i => i.checked).length
  let currentCount = x.firstElementChild.innerHTML
  if(count>0) {
    x.classList.add('verified')
    x.firstElementChild.innerHTML = currentCount.replace(/(?<=\().*(?=\))/, count)
    x.firstElementChild.style.visibility = 'visible'
  }
  else {
    x.classList.remove('verified')
    x.firstElementChild.style.visibility = 'hidden'
  }
}
areasInput.addEventListener('input', (e)=> verifyCheckboxList(e.target))
estatesInput.addEventListener('input', (e)=> verifyCheckboxList(e.target))

const expandCheckboxes =(x)=>{
  x.classList.toggle('expand-checkbox')
  if(x.classList.contains('expand-checkbox')) return
  verifyCheckboxList(x)
}
areasInput.addEventListener('click', (e)=> expandCheckboxes(e.target))
estatesInput.addEventListener('click', (e)=> expandCheckboxes(e.target))

//VERIFY ALL INPUTS
const verifyAllInputs = () =>{
  verifyEmail()
  verifyPhone(whatsappInput)
  verifyPhone(phoneInput)
  verifyCountry()
  verifyText(nameInput)
  verifyText(jobInput)
  verifyCheckboxList(areasInput)
  verifyCheckboxList(estatesInput)
  let verifiedCount = formModal.querySelectorAll('.verified').length
  if(verifiedCount > 0 && verifiedCount < 8){
    if(!emailInput.classList.contains('verified')) emailInput.classList.add('red-border-animate')
    if(!nameInput.classList.contains('verified')) nameInput.classList.add('red-border-animate')
    if(!phoneInput.classList.contains('verified')) phoneInput.classList.add('red-border-animate')
    if(!whatsappInput.classList.contains('verified')) whatsappInput.classList.add('red-border-animate')
    if(!jobInput.classList.contains('verified')) jobInput.classList.add('red-border-animate')
    if(!areasInput.classList.contains('verified')) areasInput.classList.add('red-border-animate')
    if(!estatesInput.classList.contains('verified')) estatesInput.classList.add('red-border-animate')
    if(!countryInput.classList.contains('verified')) countryInput.classList.add('red-border-animate')
  }
}

//handle outside clicking for country list, checkbox lists, and form window
formModal.addEventListener('click', e=>{
  //country list trigger
  if(countryList.style.display!="none" && !countryList.contains(e.target) && !countryInput.contains(e.target)) {
    countryList.style.display = "none"
  }
  //checkbox lists trigger
  [...formModal.querySelectorAll('.expand-checkbox')].forEach(i=>{
    if(!i.nextElementSibling.nextElementSibling.contains(e.target) && !i.contains(e.target)) i.classList.toggle('expand-checkbox')
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

//view visitor register form
const visitorRegister = () =>{
  formModal.style.display = 'flex'
  formModal.firstElementChild.classList.add('slide-down')
  verifyAllInputs()
  // history.pushState({'page': 1}, 'title', window.location.href+'form')
}

window.onhashchange = function() {
  if(formModal.style.display == 'none') return
  formModal.style.display = 'none'
  // formModal.firstElementChild.classList.add('slide-down')
 }

 window.onpopstate = function(event) {
  console.log('dsf');
  if(formModal.style.display == 'none') return
  formModal.style.display = 'none'
  // formModal.firstElementChild.classList.add('slide-down')
};

