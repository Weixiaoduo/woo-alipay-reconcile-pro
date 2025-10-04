# Woo Alipay - Reconcile Pro

支付宝对账扩展插件，用于 WooCommerce 平台。

## 功能特性

- 手动拉取支付宝对账单
- 自动解析和比对支付宝交易数据
- 后台管理界面集成
- 计划任务配置（后续版本支持）
- 支持多种账单类型

## 系统要求

- WordPress 5.0+
- WooCommerce 3.0+
- Woo Alipay 核心插件（必须先安装并启用）

## 安装方法

1. 下载插件文件到 WordPress 插件目录
2. 在 WordPress 后台启用插件
3. 确保已安装并启用 Woo Alipay 和 WooCommerce 插件

## 使用说明

### 手动对账

1. 登录 WordPress 管理后台
2. 进入 "WooCommerce" → "Alipay 对账" 页面
3. 选择对账日期和账单类型
4. 点击执行对账按钮
5. 查看对账结果和差异报告

### 账单类型

- **交易账单** (trade): 包含所有交易记录
- **其他类型**: 根据支付宝支持的账单类型扩展

## 配置选项

- 启用/禁用计划任务
- 设置每日执行时间
- 时区配置
- 数据保留策略

## 技术架构

- **主要文件**: `woo-alipay-reconcile-pro.php` - 插件主入口
- **引导文件**: `bootstrap.php` - 初始化和依赖检查
- **管理界面**: `inc/class-woo-alipay-reconcile-admin.php` - 后台管理功能
- **对账引擎**: `inc/class-woo-alipay-reconcile-runner.php` - 核心对账逻辑

## 安全说明

- 需要 `manage_woocommerce` 权限才能访问对账功能
- 使用 WordPress Nonce 验证防止 CSRF 攻击
- 所有输入数据经过严格的验证和清理

## 版本历史

- **v0.1.0**: 初始版本，支持手动对账功能

## 支持

- 插件主页: https://woocn.com/
- 作者: WooCN.com

## 许可证

请参考插件根目录下的许可证文件。