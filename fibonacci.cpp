#include<iostream>
using namespace std;
int fib(int n)
{
    if(n == 1 || n == 2)
    {
        return 1;
    }
    else
    {
        return fib(n-1) + fib(n-2);
    }
}
int main()
{
    int i,n;
    cout<<"Enter Number :";
    cin>>n;
    for(i=1;i<=n;i++)
    {
        cout<<fib(i)<<" ";
    }
    return 0;
}
