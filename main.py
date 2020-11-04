dict = [{
     "name": "abcd",
      "bill": 201912,
      "zone": "chittagong"

},{
      "name": "defg",
      "bill": 201812,
      "zone": "chittagong"
},
{
      "name": "ghj",
      "bill": 34432432,
      "zone": "dhaka"
},
{
      "name": "jklk",
      "bill": 456988,
      "zone": "chittagong"
}
]



l1 = ["how", "hw","are", "r", "you","u"]
lb = ["আপনি কেমন আছেন"]
while 1:
    ck = 0
    var = input("user:").lower()
    temp = var.split()
    check = all(item in l1 for item in temp)
    def search(name):
        for p in dict:
            if p['name'] == name:
                return p['bill']
    if("bill" in temp):
        for it in temp:
            if(search(it)):
                print(search(it))
                ck = 1

    if var == "hi" or var == "hlw" or var == "hello" or var == "hlo" :
       print("bot: " + "hey!") 
       ck = 1
    if(len(temp) > 2 and check):
        print("bot: " + "I am fine")
        ck = 1
    if(var == "আপনি কেমন আছেন"):
        print("bot: " + "আমি ভালো আছি")
        ck = 1
    if(ck == 0):
        print("Don't Understand");
            


        
