<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/12/26 0026
 * Time: 18:57
 */

/**
 * 测试红包
 */

function flower(){


    //   77.61  x 5 = 388.05
    //   69.62  x 5 = 348.1
    //   64.36  x 5 = 321.8
    //   55.22  x 5 = 276.1
    //   56.39  x 5 = 281.95
    //   49.39  x 5 = 246.95
    //   48.21  x 5 = 241.05
    //   48.19  x 5 = 240.95
    //   47.65  x 5 = 238.25
    //   46.45  x 5 = 232.25
    //   45.96  x 5 = 229.8
    //   45.50  x 5 = 227.5
    //   38.42  x 5 = 192.1
    //   37.51  x 5 = 187.55
    //   35.56  x 5 = 177.8
    //   33.96  x 5 = 169.8

    //共计 80人   4000元




    //高值
    //   112    x 3 =  336
    //   109.26 x 3 =  327.78
    //   94.26  x 3 =  282.78
    //   86.54  x 3 =  259.62




    //   77.61  x 3 =  232.83        15      1721.78

    //   69.62  x 5 = 348.1
    //   64.36  x 5 = 321.8
    //   55.22  x 5 = 276.1
    //   56.39  x 5 = 281.95
    //   47.65  x 5 = 238.1
    //   42.96  x 5 = 214.8         30      1680.85

    //   37.51  x 5 = 187.55
    //   33.96  x 5 = 169.8....
    //   35.56  x 5 = 177.8....
    //   30.27  x 5 = 151.35



    //   28.23  x 5 = 141.15....
    //   26.16  x 5 = 130.8
    //   25.34  x 5 = 126.7....
    //   24.37  x 5 = 121.85
    //   21.68  x 5 = 108.4
    //   18.67  x 20  = 373.4
    //   17.26  x 20  = 345.2
    //   16.37  x 10  = 163.7
    //   15.12  x 10  = 151.2       105       2348.9



    //     共计                     150         5751.53


    // 剩余300人*12 = 3600          300          3600



    // 剩余  648.47




    //低值12x100 = 1200    共120个    余7680

    //剩余人数  380人X12=4560          余3120

    // max = 100
    // min = 0

    $a=$this->randomDivInt(300,64847);

    $a = implode('/',$a);
    file_put_contents('txt.txt',$a);

//        var_dump($a);//$a中便是分的不等数
//        var_dump(array_sum($a));





}