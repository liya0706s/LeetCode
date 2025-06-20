## 三個步驟指令(at vscode terminal)
1. create the file
code hello.c
2. run the compiler or recompiler
(in this folder)
make hello
3. execute/run the program
./hello

## argument/parameter的區別
- Parameter 是 function 開菜單時說他會吃的東西，Argument 是你實際端上桌的菜！
- Parameter 是空杯子，你定義它放什麼。
Argument 是水，你實際倒進去的內容。
- EX: f(x), f(2)
f是function, x是parameter, 2是argument

arguments-> [function] -> side effects/return value
 (input)                   (output)

## header files/libraries

## Conditional statement
if (x < y)
{
    printf("x is less than y\n");
}
else if (x > y)
{
    printf("x is greater than y\n");
}
else if (x = y)
{
    printf("x is equal to y\n")
}

當第三種條件是不用特別描述的狀況，顯而易見的條件可以直接寫else，以減少寫多寫錯的狀況。優化如下: