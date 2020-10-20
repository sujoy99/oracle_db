#include<iostream>
using namespace std;
#define Max 10
void bubblesort(int a[], int n){
    int i,j,temp;
    for(i=0;i<n;i++){
        for(j=0;j<n-i-1;j++){
            if(a[j]>a[j+1]){
                temp = a[j];
                a[j] = a[j+1];
                a[j+1]= temp;
            }
        }
    }
}

void bubblesort1(int a[], int n){
    int i,j,temp;
    for(i=0;i<n;i++){
        for(j=0;j<n-i-1;j++){
            if(a[j]<a[j+1]){
                temp = a[j];
                a[j] = a[j+1];
                a[j+1]= temp;
            }
        }
    }
}

int main()
{
    int i,n,a[Max];
    cout<<"Enter no. of input :";
    cin>>n;
    cout<<"Enter input :"<<endl;
    for(i=0;i<n;i++){
        cin>>a[i];
    }
    cout<<"Before Sorting :";
    for(int i=0;i<n;i++){
        cout<<a[i]<<" ";
    }

    bubblesort1(a,n);

    cout<<"After Sorting :";
    for(int i=0;i<n;i++){
        cout<<a[i]<<" ";
    }
    return 0;
}
