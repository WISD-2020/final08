## 系統擷取畫面

- **首頁**

<img src="https://i.imgur.com/UwqNhFi.png">

點選畫面正中央的「請先登入」抑或是頁面右上角的「登入」鈕都可以登入

- **購買戒指**

<img src="https://i.imgur.com/n7mkuo3.png">

點選商品最右欄的「ADD TO CART」即可將要購買的樣式加入購物車

- **購物車**

<img src="https://i.imgur.com/0gWrf7d.png">

- **管理者 戒指樣式管理**

<img src="https://i.imgur.com/VcMJECf.png">

- **管理者 編輯戒指樣式**

<img src="https://i.imgur.com/j5Hfyjj.png">

- **管理者 新增戒指樣式**

<img src="https://i.imgur.com/6opxaqd.png">

## 系統名稱及作用

- **系統名稱**

 線上訂購戒指系統

- **作用**

旨在讓顧客可線上訂製自己想要的戒指，提供顧客更便捷的訂購管道

## 系統的主要功能

## 前台

- **首頁** [3A732002 馬妤岑](https://github.com/3A732002)

    Route::get('/',[HomeController::class,'index'])->name('home');

- **購買戒指** [3A732002 馬妤岑](https://github.com/3A732002)

    Route::prefix('buy')->group(function () {
    
    //購買戒指頁面
    
    Route::get('/', [BuyController::class, 'index'])->name('customer.buy.index');
    
    //加入購物車
    
    Route::get('rings/{id}', [BuyController::class, 'cart'])->name('customer.buy.cart');
    
    });
    
- **購物車** [3A732002 馬妤岑](https://github.com/3A732002)

    //購物車頁面
    
    Route::get('cart', [CartController::class, 'index'])->name('customer.cart.index');
    
    //刪除購物車
    
    Route::delete('cart/{id}', [CartController::class, 'cartdel'])->name('customer.cart.destroy');
    
## 後台

- **管理者頁面** [3A732041 王振宇](https://github.com/3A732041)

    Route::middleware(['auth:sanctum', 'verified'])->prefix('admin')->group(function () {
    
    //主控台
    
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.dashboard.index');
    
    //戒指樣式管理
    
    Route::get('rings', [AdminRingElementsController::class, 'index'])->name('admin.rings.index');
    
    //新增戒指樣式
    
    Route::get('rings/create', [AdminRingElementsController::class, 'create'])->name('admin.rings.create');
    
    //編輯戒指樣式
    
    Route::get('rings/{id}/edit', [AdminRingElementsController::class, 'edit'])->name('admin.rings.edit');
    
    //刪除戒指樣式
    
    Route::delete('rings/{id}',[AdminRingElementsController::class,'destroy'])->name('admin.rings.destroy');
    
    //儲存戒指樣式
    
    Route::post('rings',[AdminRingElementsController::class,'store'])->name('admin.rings.store');
    
    //更新戒指樣式
    
    Route::patch('rings/{id}',[AdminRingElementsController::class,'update'])->name('admin.rings.update');
    
    });
    
## ERD

<img src="https://i.imgur.com/hL2LjWR.png">

## 關聯式綱要圖

<img src="https://i.imgur.com/fruvehM.png">

## 資料表欄位設計

- **顧客**

<img src="https://i.imgur.com/YVx2ODy.png">

- **訂單**

<img src="https://i.imgur.com/5HbPun3.png">

- **戒指樣式**

<img src="https://i.imgur.com/QJNjhIp.png">

- **戒指設計**

<img src="https://i.imgur.com/EYaOw1b.png">

- **購物車**

<img src="https://i.imgur.com/QW7zobO.png">

## 初始專案與DB負責的同學

- **初始專案** [3A732002 馬妤岑](https://github.com/3A732002)

- **DB**

    users [3A732041 王振宇](https://github.com/3A732041)

    ringelements [3A732041 王振宇](https://github.com/3A732041)

    rings [3A732002 馬妤岑](https://github.com/3A732002)

    orders [3A732002 馬妤岑](https://github.com/3A732002)

    carts [3A732002 馬妤岑](https://github.com/3A732002)
    
## 額外使用的套件或樣板

- **前台** - [dailyshop](https://www.free-css.com/free-css-templates/page236/dailyshop)

很適合搭配此系統的頁面設計

- **後台** - [side bar](https://startbootstrap.com/template/simple-sidebar)

為製作簡易操作介面，讓管理者輕鬆使用

## 系統復原步驟

   1.｜ 複製https://github.com/WISD-2020/final08.git 本系統在GitHub的專案，打開Source tree，點選clone後，輸入以下資料

        。Source Path:https://github.com/WISD-2020/final08.git

        。Destination Path:C:\wagon\uwamp\www\final08

   2.｜ 打開cmder，切換至專案所在資料夾，cd final08

   3.｜ 在cmder輸入以下命令，以復原此系統：

        。composer install

        。composer run‐script post‐root‐package‐install

        。composer run‐script post‐create‐project‐cmd

   4.｜ 將專案打開 在.env檔案內輸入資料庫主機IP、Port、名稱、與帳密如下：

        。DB_HOST=127.0.0.1

        。DB_PORT=33060

        。DB_DATABASE=final08

        。DB_USERNAME=root

        。DB_PASSWORD=root

   5.｜ 在cmder輸入以下命令，將所有資料表產生至final08資料庫內

        。php artisan migrate

   6.｜ 開啟UwAmp，點選PHPMyAdmin，輸入以下資料後並點擊登入，進入MySQL後，建立新資料庫，名稱為final08，將專案sql資料夾裡的users.sql、rings.sql、ringelements.sql、orders.sql、carts.sql匯入

        。資料庫系統:MYSQL

        。伺服器:localhost:33060

        。帳號:root

        。密碼:root

   7.｜ 在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final08/public

## 系統使用者測試帳號

- **前台**

    使用者

        帳號:as10510588@gmail.com

        密碼:as10510511


- **後台**

    管理者

        帳號:asdfg10510588@gmail.com

        密碼:asd10510511

## 系統開發人員與工作分配

- [3A732002 馬妤岑](https://github.com/3A732002)

    前台管理
    
    -- 首頁
    
    -- 購買戒指
    
    -- 購物車
    
   readme的輸入及排版

- [3A732041 王振宇](https://github.com/3A732041)

    後台管理

    -- 主控台
    
    -- 戒指樣式管理
    
    -- 登入頁面進入前台或後台頁面
