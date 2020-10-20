#include<iostream>
using namespace std;
#define Max 10

int quick_partition(int a[], int low, int high)
{
    int pivot = a[high];
    int i = low - 1;
    int tmp;
    for(int j = low; j<high; j++)
    {
        if(a[j] < pivot)
        {
            i += 1;
            tmp = a[j];
            a[j] = a[i];
            a[i] = tmp;
        }
    }


    tmp = a[high];
    a[high] = a[i+1];
    a[i+1] = tmp;

    return i+1;
}

void quicksort(int a[], int low, int high)
{
    if(low>=high)
        return;

    int p = quick_partition(a,low,high);

    quicksort(a,low,p-1);
    quicksort(a,p+1,high);
}

int main()
{
    int i,n,a[Max];
    cout<<"Enter no. of input :";
    cin>>n;
    cout<<"Enter input :"<<endl;
    for(i=0;i<n;i++)
    {
        cin>>a[i];
    }
    cout<<"Before Sorting :";
    for(int i=0;i<n;i++)
    {
        cout<<a[i]<<" ";
    }

    int high = n-1;
    int low = 0;

    quicksort(a,low,high);

    cout<<"After Sorting :";
    for(int i=0;i<n;i++)
    {
        cout<<a[i]<<" ";
    }

    return 0;
}
