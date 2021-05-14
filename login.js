const name = document.getElementById('name')
const password = document.getElementById('password')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

document.getElementById('email').style.height="30px";
document.getElementById('email').style.fontSize="14pt";

document.getElementById('password').style.height="30px";
document.getElementById('password').style.fontSize="14pt";

document.getElementById('repassword').style.height="30px";
document.getElementById('repassword').style.fontSize="14pt";

document.getElementById('number').style.height="30px";
document.getElementById('number').style.fontSize="14pt";

document.getElementById('fname').style.height="30px";
document.getElementById('fname').style.fontSize="14pt";

document.getElementById('lname').style.height="30px";
document.getElementById('lname').style.fontSize="14pt";



form.addEventListener('submit', (e) => {
  let messages = []
  if (name.value == '' || name.value == null) {
    messages.push('Name is required')
  }

  if (password.value.length <= 8) {
    messages.push('Password must be longer than 8 characters')
  }

  if (password.value.length >= 20) {
    messages.push('Password must be less than 20 characters')
  }

  if (password.value === 'password') {
    messages.push('Password cannot be password')
  }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})