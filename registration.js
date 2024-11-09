function checkPassword(form) 
{
    pwd = form.pwd.value;
    cpwd = form.cpwd.value;

    if (pwd != cpwd) 
    {
        alert ("Password did not match: Please try again...")
        return false;
    }

}