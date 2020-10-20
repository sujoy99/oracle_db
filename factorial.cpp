#include<iostream>
using namespace std;
int fact(int n)
{
    if(n == 1)
    {
        return 1;
    }
    else
    {
        return n * fact(n-1);
    }

}
int main()
{
    int n,result;
    cout<<"Enter Number :";
    cin>>n;
    result = fact(n);
    cout<<"Factorial of "<<n<<" is "<<result<<endl;
    return 0;
}
