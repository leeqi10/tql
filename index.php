<?php
$qq=$_GET['qq'];
$con=mysqli_connect("47.111.31.113","root","TANGqi0924","tb");
// 检测连接
if (mysqli_connect_errno())
{
    echo "数据库连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM table8e WHERE qq=$qq");

//adawadudgagddgaudagdwaugduadgagduaguda


if(mysqli_num_rows($result)<1){
echo "查询无数据 正在持续更新";
}
else{
    while($row = mysqli_fetch_array($result))
{

    echo "<script>alert('2021/1/22日后 只提供内部人群使用')</script>";

    echo "QQ:";
    echo $row['qq'];
    echo "<br/>";
    echo "<br/>";
    echo "PN:";
    echo $row['pn'];
    echo "<br>";
    echo "<br/>";
    echo '<a href="http://img03.sogoucdn.com/app/a/100520146/887ba494f06c51e56a6e8d340b8ece1d
">加入我们内部群</a>';
    
    
}
}
?>
