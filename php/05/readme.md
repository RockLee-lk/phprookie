# PHP 函数的应用
 3W 1H :

 - What 什么是函数?
 	就是一个功能: 举列子ATM机
 	程序中的函数,就是具有一定功能的代码,一堆

 - Why 为什么要学习函数?
 	1. 提高代码的重用性
 	2. 提高开发效率
 	3. 利于代码维护


 - Where 在哪里能使用到函数?

 - How 如何声明/调用函数







## 如何声明函数

```php
function 函数名(形参列表)
{
	函数体/代码块
	return 返回值
}
以上的结构中,形参和返回值 都是可选的,即没有参数或者没有返回值的函数.其他部分都是必须的.
```

## 如何调用函数
```php
函数名(实参列表);
```
- 函数不调用 就不会执行,调用几次 就执行几次.
- 函数可以在 任意处调用: 函数前/后/中
- 函数名 不区分大小写
- 如果 函数有参数,则按顺序 传入对应的值.


## 函数语法的细节

- function
	使用此关键字 声明函数

- 函数名
	1. 必须是 以数字/字母/下划线组成,不能以数字开头
	2. 函数不能重复定义.(自定义函数+系统函数)

	函数命名形式:
	小驼峰命名法
	大坨峰命名法
	下划线命名法

- 形参列表 (函数的参数)
	1. 提供函数中 需要的参数
	2. 参数可以有 零个,一个,无数个
	3. 多个参数,每个参数之间 需要使用 逗号隔开

	-形参
		1. 形式上的参数,在定义函数的时候,写在函数名后面小括号内的参数.在函数中 要用到该参数.
		2. 形参可以有默认值,也可以没有默认值
		3. 有默认值的形参 需要往后放
	-实参
		1. 实际上的参数,在调用函数的时候,写在函数名后面括号内用逗号分隔开的参数
		2. 多传的实参,会被忽略
		3. 有默认值的参数,可以省略,没有默认值的参数必须传递
		4. 实参要按照形参的顺序去传递


	-函数体
		函数体: 任何有效的php代码

	- 返回值 return
		1. 用 return 关键字,将函数的执行结果返回到调用处
		2. 如果函数没有返回值,那么调用该函数,将会返回null
		3. return 语句后面的代码永远不会执行,return相当于退出了该函数







- 返回值


## 判断函数是否存在
function_exists()
	函数存在返回true,不存在返回 false
	函数名要以字符串的形式传入


tips:
	- get_defined_functions();// 获取所有已经定义的函数
	- get_loaded_extensions();// 获取所有可用的模块


## php变量的生效范围

- 局部变量
- 全局变量





