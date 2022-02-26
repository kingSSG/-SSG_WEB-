class GitSSG 
{
    public static void main(String args[]) 
    {
        int r, sum = 0, temp;
        int n = 454;// It is the number variable to be checked for palindrome

        temp = n;

        while (n > 0) 
        {
            r = n % 10; // getting remainder
            sum = (sum * 10) + r;
            n = n / 10;
        }
        if (temp == sum)
            System.out.println("palindrome number ");
        else
            System.out.println("not palindrome");
    
    <?php

$sname= "localhost";

$unmae= "root";

$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}    
    
    }
}