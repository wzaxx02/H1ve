# 题目：sqliBlind

### 题目描述：Mysql延时注入，user-agent头

### 题目难度： 🌟🌟

### 维护：SiJiDo

### KEY: `flag{82c3c4c7c43a9c163e515a5796604c35}`

### 配置信息： 

1. 开放端口： `8080`

### 解题过程：

1. User-agent存在Mysql 时间盲注漏洞
2. User-Agent: Mozilla/5.0 ' ^(if(1=1,sleep(3),0))^'
3. 自己写脚本，也可以用sqlmap