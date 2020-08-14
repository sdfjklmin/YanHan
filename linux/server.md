#### 基础单位
    一个位节存储 8 位无符号数，储存的数值范围为0-255。 2^8 - 1
    1B       = 8bit
    1bit     = 0.125B
    1 / 8    = 125
    以 `字节` 分割,向上 `1024`, 向下 `8`.
    
    单位:
        Bit                 ——  比特
        B(Byte)             ——  字节
        KB(Kilobyte)        ——  千字节
        MB(Megabyte)        ——  兆字节
        GB(Gigabyte)        ——  吉字节
        TB(Trillionbyte)    ——  太字节
        更多请自行查阅!
        
    换算:
        1B      8位(Bit)
        1KB     1024B 
        1MB     1024KB 
        1GB     1024MB 

#### 腾讯云 5M 云服务器
    实际下载:    
        5M 服务器实际下载为 640kb/s
        服务商用的是 bit(比特)
        而实际下载用的是 byte (字节)
        最大值预算,网络传输要经过各种路由节点,会有一定的损失
        5Mbps = 640k byte/s ≈ 600k byte/s
        1M bit/s = 1024K bit/s = (1024/8) = 128k byte/s
        5M bit/s = 128k byte/s * 5 = 640k byte/s
        如果一个页面访问为 10k,那么同时支持 64个访问
    
    实际上传:
        5M 腾讯服务器实际上传为 1.25M/S
        腾讯以 10M 为分割, 小于 10M 按照 10M 算, 大于 10M 按照原有值算
        10M bit/s = 128k byte/s * 10 = 1280K byte/s = (1280/1024)M byte/s = 1.25M byte/s
        
#### 云服务器
    (CUP核数)核 (内存)G (带宽)M
    1核2G 2M带宽：适用于一天几百上千的访问，大概1秒3-10人同时访问进活动。
    
    2核4G 5M带宽：适用于一天几万的访问，大概1秒10-50人同时访问进活动。
    
    8核16G 10M带宽：适用于一天几十万的访问，大概1秒100-500人同时访问进活动