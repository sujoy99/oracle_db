#include<iostream>
using namespace std;
int main()
{
    int num,n,digit,rev=0;
    cout<<"Enter Number :";
    cin>>num;
    n = num;
    while(num != 0)
    {
        digit = num%10;
        rev = (rev*10) + digit;
        num = num / 10;
    }
    if(n == rev)
    {
        cout<<"Pallindrome";
    }
    else
    {
        cout<<"Not Pallindrome";
    }




    return 0;
}
