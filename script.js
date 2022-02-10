

let math_Expression_Button = document.getElementById("expression_Button");
math_Expression_Button.addEventListener("click", function() {
    let x = document.getElementById("number_X")
    let y = document.getElementById("number_Y")
    let math_Api = "http://localhost/API/math_Expression.php/?x=" + x.value + "&y=" + y.value;
    math_Expression(math_Api)
});

async function math_Expression(link) {
    let expression_response = await fetch(link)
    let expression_String = await  expression_response.json()
    expression_Result.innerHTML = expression_String.solution
    console.log(expression_String.solution)
}

let palindrome_Button = document.getElementById("palindrome_Button");
palindrome_Button.addEventListener("click", function(){
    let palindrome = document.getElementById("palindrome")
    let palindrome_Api = "http://localhost/API/palindrome_Api.php/?string=" + palindrome;
    palindrome_Check(palindrome_Api)
})

async function palindrome_Check(link){
    let palindrome_response = await fetch(link)
    let palindrome_String = await palindrome_response.json()
    result_Palindrome_String.innerHTML = palindrome_String.result

}

let fix_Space_Button = document.getElementById("fix_Space_Button");
fix_Space_Button.addEventListener("click",function(){
    let tofix = document.getElementById("text")
    let whiteSpace_Api = "http://localhost/API/white_Space_Remover.php/?string=" + tofix.value;
    white_Space_Remover(whiteSpace_Api)
})

async function white_Space_Remover(link){

    let white_Space_Remover_response = await fetch(link)
    let white_Space_Remover_String = await white_Space_Remover_response.json()
    fixed_Text.innerHTML = white_Space_Remover_String.FixedString
    console.log(white_Space_Remover_String.FixedString)
}

let password_Button = document.getElementById("password_button")
password_Button.addEventListener("click", function(){
    let pass = document.getElementById("password")
    let password_Api = "http://localhost/API/password_validator_hasher.php/?password=" + pass.value;
    password_validator(password_Api)

})

async function password_validator(link){
    let password_Validator_Response = await fetch(link)
    let password_Validator_String = await password_Validator_Response.json()
    result_password.innerHTML = password_Validator_String.isValid
    console.log(password_Validator_String.isValid)
}