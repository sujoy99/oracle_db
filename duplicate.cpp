#include<vector>
main()
{
    int a[5] = {1,1,2,2,3};
    int i,j,k,n=5;
    vector<int>v;
    for(i=0;i<n;i++){
        for(j=i+1;j<n;j++){
            if(a[i]==a[j]){
                for(k=j;k<n;k++){
                    a[k] = a[k+1];
                }
                n--;
            }
            /*else{
                j++;
            }*/

        }
    }
    for(i=0;i<n;i++){
            cout<<a[i]<<endl;
        }
}
