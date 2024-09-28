# Laravel 11 優雅測試

引入 pestphp 的 pest 套件來擴增注重簡單性。Pest 經過精心設計，將測試的樂趣帶入 PHP，測試情境也更易於閱讀和理解。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 你可以使用 `./vendor/bin/pest` 指令來執行測試。
```sh
$ ./vendor/bin/pest
```

----

## 畫面截圖
![](https://i.imgur.com/6gF70VG.png)
> 您可以以期望的優雅性和喜歡的便利性來建立測試
