## 三個步驟指令(at vscode terminal)

1. create the file
- code hello.c
2. run the compiler or recompiler
(in this folder)
- make hello
3. execute/run the program
- ./hello

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

當第三種條件是不用特別描述的狀況，顯而易見的條件可以"直接寫else"，以減少寫多寫錯的狀況。優化如下:

if (x < y>)
{
    printf("x is less than y\n");
}
else if (x > y)
{
    printf("x is greater than y\n");
}
else
{
    printf("x is equal to y\n");
}

## operator
counter = counter + 1;
閱讀理解方式是，右邊的計算assign到左邊。
這是經常出現的，還有以下簡易寫法。
counter += 1;
counter++;

## terminal command
- make compare 
run the compiler or recompiler
- ./compare
執行當前資料夾中名叫compare的可執行檔(程式)


# C語言中，"雙引號 和'單引號 的差別
| 符號      |     資料型別           |   用來表示         | 範例                     |
| --------- | --------------------- | ------------------ | ---------------------- |
| `'單引號'` | `char`               |    **單一字元**     | `'A'`, `'y'`, `'1'`    |
| `"雙引號"` | `char[]` 或 `string` | **字串（多個字元）** | `"Hi"`, `"y"`, `"123"` |

## loop
int i = 3;
while (i > 0)
{
    printf("meow\n");
    i--;
}

step1. initialize the variable
step2. check the while boolean,
while (Boolean) is true, keep doing inside the brackets.
step3. set the counter

