<?php 
/*	动态存储类型
		动态变量:在函数调用完成之后,会自动释放的变量

	静态存储类型
		静态变量:在函数调用完成之后,不会自动释放
		而是在该函数的 一次或多次调用之间共享的,直到脚本结束为止
		在函数再次执行时,静态变量将使用前一次的结果,继续运算
		方法:使用`static`关键字来标识 某个局部变量为静态变量*/


function test()
{
	static $a = 0;
	$b = 0;

	$a++;
	$b++;

	echo $a . '------' . $b . '<br>';
}











