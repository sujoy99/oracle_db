#include<iostream>
#include<bits/stdc++.h>
using namespace std;

int main(){
    string s,s2;
    cout<<"Enter String: ";


    getline(cin,s);
//    char ch;
//    cin>>ch;
    for(int i = s.length()-1; i >=0; i--){
        s2+=s[i];
    }
    cout<<s2;
}
