const name = document.getElementById('name')
const sername = document.getElementById('sername')
const phonenum = document.getElementById('phonenum')
const mobilenum = document.getElementById('mobilenum')
const email = document.getElementById('email')
const city = document.getElementById('city')
const adres = document.getElementById('adres')
const zip = document.getElementById('zip')
const curdnumb = document.getElementById('curdnumb')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
  let messages = []
  if (/^[A-Za-z]+$/.test(name.value) ) 
    {
      document.getElementById("name").style="";
      //document.getElementById("errors").innerText="";
    } 
    else 
    {
      messages.push('Name field is invalid')
      document.getElementById("name").style="border:2px solid red;";
    }

  if (/^[A-Za-z]+$/.test(sername.value) ) 
    {
      document.getElementById("sername").style="";
    } 
    else 
    {
      messages.push('sername field is invalid')
      document.getElementById("sername").style="border:2px solid red;";
    }
    
    if (/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/.test(email.value) ) 
    {
      document.getElementById("email").style="";
      //document.getElementById("errors").innerText="";
    } 
    else {
      messages.push('Email field is invalid')
      document.getElementById("email").style="border:2px solid red;";
    }


      if ( /[+30210]{1}[0-9]{7}/.test(phonenum.value) )
    {
      document.getElementById("phonenum").style="";
      //document.getElementById("errors").innerText="";
    } 
    else 
    {
      messages.push('Phone number field is invalid')
      document.getElementById("phonenum").style="border:2px solid red;";
    }


      if ( /[+30]{1}[0-9]{10}/.test(mobilenum.value) ) 
    {
      document.getElementById("mobilenum").style="";
      //document.getElementById("errors").innerText="";
    } 
    else 
    {
      messages.push(' Mobile Phone number field is invalid')
      document.getElementById("mobilenum").style="border:2px solid red;";
    }

      if ( /[0-9]{5}/.test(zip.value) )
    {
      document.getElementById("zip").style="";
      //document.getElementById("errors").innerText="";
    } 
    else 
    {
      messages.push('Zip Code field is invalid')
      document.getElementById("zip").style="border:2px solid red;";
    }

    if ( /[0-9]{16}/.test(curdnumb.value) ) 
    {
      document.getElementById("curdnumb").style="";
      //document.getElementById("errors").innerText="";
    } 
    else 
    {
      messages.push('Credit Card number field is invalid')
      document.getElementById("curdnumb").style="border:2px solid red;";
    }

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})





