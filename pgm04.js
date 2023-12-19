
chk.onclick = function() {
    let input = prompt("Enter your USN:")
    if (reg.test(input))
      document.write("<h1>Valid USN</h1>");
    else
      document.write("<h1>Not  a Valid USN</h1>");
  }
  
  const reg = /[1-4][A-Z]{2}[0-9]{2}[A-Z]{2}[0-9]{3}/g