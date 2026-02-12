function validatingaForm()
{
    const email= document.getElementById('email').value;
    if(!email.includes('@'))
    {
        alert('Invalid email adrress. Please try again')
        return false;
    }
    return true;
}