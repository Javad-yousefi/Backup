#! /usr/bin/env python3
# _*_ coding:UTF-8 _*_
# ****the Blow code Show courrent Version of python on Device***
# import platform
# print("this is python version{}".format(platform.python_version()))
# Show text on screen with print function
# print('hello world')
# print('Something else')
import platform
import time

py_version=platform.python_version()

def main():
    # ask_ok("Do You want leave us")
    a=dict(mehr=7,aban=8,azar=9,dey=10,bahman=11,esfand=12)
    print(len(a))
    print(a[key])

def massage():
    print('just simple text of format text whit formant function {}'.format(py_version))
    print(f'fomant simpler than before {py_version}')

def isPrime(n):
    for i in range(2,n):
        for x in range(2,i):
            if i%x==0:
                print("{} is equal {}*{}".format(i,x,i//x))
                break
        else:
            print(i,"is prime")

def isEven(n):
    for i in range (2,10):
        if i%2==0:
            print("Found an Even Number{}".format(i))
            continue
        print(f"{i} is not Even")

def timerForFun(n):
    for i in range(n):
        time.sleep(1)

def just_pass():
    while True:
        pass

def ask_ok(prompt,retry=4,reminder="Please try again!"):
    while True:
        ok= input(prompt)
        if ok in ('y', 'yes','Y','ye','Yes'):
            return True
        if ok in ('no','n','nop'):
            return False
        retry=retry-1
        if retry<0:
            raise ValueError('invalid user Response')
        print(reminder)




if __name__ == '__main__': main();